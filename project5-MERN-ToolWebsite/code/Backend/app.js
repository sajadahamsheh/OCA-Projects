const express = require("express");
const app = express();
const mongoose = require("mongoose");
const PORT = 5001;
const { MONGOURI } = require("./keys");
const cors = require("cors");

app.use(cors());

mongoose.set("useCreateIndex", true);

mongoose.connect(MONGOURI, {
	useNewUrlParser: true,
	useUnifiedTopology: true,
	useFindAndModify:false
});
mongoose.connection.on("connected", () => {
	console.log("Connected to mongo");
});

mongoose.connection.on("error", (err) => {
	console.log("Error connecting", err);
});

require("./models/User");

app.use(express.json());
app.use(require("./routes/auth"));

app.listen(PORT, () => {
	console.log("Server is running on", PORT);
});
