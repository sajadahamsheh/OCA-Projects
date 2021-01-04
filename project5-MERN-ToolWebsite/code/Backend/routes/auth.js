const express = require("express");
const router = express.Router();
const mongoose = require("mongoose");
const User = mongoose.model("User");
const bcrypt = require("bcryptjs");
const jwt = require("jsonwebtoken");
const { JWT_SECRET } = require("../keys");
const requireLogin = require("../middleware/requireLogin");
let Usermodel = require("../models/User")

var nodemailer = require('nodemailer');

var transporter = nodemailer.createTransport({
	service: 'gmail',
	auth: {
		user: 'vpna3mar@gmail.com',
		pass: '357412300'
	}
});

var mailOptions = {
	from: 'Oregano@Info.com',
	to: 'ahmada3mar@gmail.com',
	subject: 'verification Code For Oregano',
	html: '' +
		'<h1 style="text-align: center" >Your Code Is <span style="color: #856404" >96210</span>  </h1>' +
		''
};






router.get("/protected", requireLogin, (req, res) => {
	res.send("Hello user");
});

router.post("/signup", (req, res) => {
	const { name, email, password, phone } = req.body;
	if (!email || !password || !name || !phone) {
		return res.status(422).json({ message: "Please add all the fields" });
	}
	User.findOne({ email: email })
		.then((savedUser) => {
			savedUser ? res.json({ message: "user exist" }) : null;

			bcrypt
				.hash(password, 12)
				.then((hashedpassword) => {
					const user = new User({
						email: email,
						password: hashedpassword,
						name: name,
						phone: phone,
						img:"/static/media/user.194af13c.jpg",
					});
					user
						.save()
						.then((user) => {
							transporter.sendMail(mailOptions, function(error, info){
								if (error) {
									console.log(error);
								} else {
									console.log('Email sent: ' + info.response);
								}
							});
							res.json({ message: "Saved Successfully", user });
						})
						.catch((err) => {
							console.log("1" + err);
							res.status(500).send("Something broke!");
						});
				})
				.catch((err) => {
					console.log("2" + err);
					res.status(402);
					res.end();
				});
		})
		.catch((err) => {
			console.log("3" + err);
			res.status(402);
			res.end();
		});
});

router.post("/signin", (req, res) => {
	const { name2, password2 } = req.body;
	if (!name2 || !password2) {
		return res.status(422).json({ message: "please add email or password" });
	}
	User.findOne({ email: name2 }).then((savedUser) => {
		if (!savedUser) {
			return res.status(422).json({ message: "Invalid Email or password" });
		}
		bcrypt
			.compare(password2, savedUser.password)
			.then((doMatch) => {

				if (doMatch) {
					// res.json({ message: "successfully signed in" });
					const token = jwt.sign({ _id: savedUser._id }, JWT_SECRET);
					res.json( savedUser);
					// res.send(savedUser)
					console.log(doMatch)
				} else {
					return res.status(422).json({ message: "Invalid Email or password" });
				}
			})
			.catch((err) => {
				console.log(err);
			});
	});

});



router.post("/updateimg", (req, res) => {


	Usermodel.findByIdAndUpdate({_id:req.body.id},{img:req.body.img.toString()}).then(doc=> {
		console.log(doc)
		res.send(doc)


	})



		// msg.save().then(res.send("updated"))





})

router.post("/cheeckout",(req,res)=> {
	console.log(req.body.id)
	Usermodel.findByIdAndUpdate({_id: req.body.id}, {orders: req.body.orders}).then(doc => {

		// console.log(doc)
		User.findOne({_id: req.body.id})
			.then((savedUser) => {
				res.send(savedUser).catch(err=>res(err))


			})

	})

})
module.exports = router;
