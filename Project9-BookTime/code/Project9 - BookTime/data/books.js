import { COLORS, FONTS, SIZES, icons, images } from "../constants";

const bookAliceInWonderland = {
  id: 1,
  bookName: "Alice in Wonderland",
  bookCover: images.aliceInWonderland,
  rating: 4.6,
  language: "Eng",
  pageNo: 341,
  author: "Lewis Carroll",
  genre: ["Adventure", "Drama"],
  link:"https://www.amazon.com/Alices-Adventures-Wonderland-AmazonClassics-Carroll-ebook/dp/B071RSDB49",
  description:"Tumble down the rabbit hole with Alice for a fantastical adventure from Walt Disney Pictures and Tim Burton. Inviting and magical, ALICE IN WONDERLAND is an imaginative new twist on one of the most beloved stories of all time. Alice (Mia Wasikowska), now 19 years old, returns to the whimsical world she first entered as a child and embarks on a journey to discover her true destiny. This Wonderland is a world beyond your imagination and unlike anything you've seen before.",
  backgroundColor: "rgba(255, 204, 204,0.9)",
  navTintColor: "#000",
  isActive: false,
};
const bookTheBootedCat = {
  id: 2,
  bookName: "The Booted Cat",
  bookCover: images.theBootedCat,
  rating: 4.1,
  language: "Eng",
  pageNo: 272,
  author: "Charles Perrault ",
  genre: ["Adventure",],
  link: "https://www.amazon.com/Master-Cat-booted-cat-translation-ebook/dp/B00UC6LSJO",
  description: "The youngest child of a miler inherits a cat from his father. It is not a regular cat since it can talk and think like a man. Actually, the small inheritance turns, rapidly, into a wonderful gift Charles Perrault was a serious writer who understood, at the end of his life, that his duty, as a human being and an intellectual, was to increase the level of reason and humanity of people. Therefore, he gathered European folktales and transformed them in order to enhance their moral qualities. ",
  backgroundColor: "rgba(119,77,143,0.8)",
  navTintColor: "#FFF",
  isActive:false,
}
const bookTheArrivalOfSomeday = {
  id: 3,
  bookName: "The Arrival Of Someday",
  bookCover: images.theArrivalOfSomeday,
  rating: 3.5,
  language: "Eng",
  pageNo: 110,
  author: "Jen Malone",
  genre: ["Drama", "Adventure"],
  link:"https://www.amazon.com/Arrival-Someday-Jen-Malone/dp/0062795392",
  description:"In this emotionally candid contemporary YA, author Jen Malone delves into the world of a teen whose life is brought to an abrupt halt when she learns she’s in dire need of an organ transplant.Hard-charging and irrepressible, eighteen-year-old Amelia Linehan could see a roller derby opponent a mile away—and that’s while crouched down, bent over skates, and zooming around a track at the speed of light",
  backgroundColor: "rgba(45, 185, 185,0.8)",
  navTintColor: "#FFF",
};
const bookLittleWomen = {
  id: 4,
  bookName: "Little Women",
  bookCover: images.LittleWomen,
  rating: 4.5,
  language: "Eng",
  pageNo: 110,
  author: "Louisa May Alcott",
  genre: ["Drama", "Adventure"],
  link:
    "https://www.amazon.com/dp/0316489271?ots=1&linkCode=ogi&tag=oprah-auto-20&ascsubtag=[artid|10072.a.29576863[src|[ch|[lt|",
  description:
    "For generations, children around the world have come of age with Louisa May Alcott's March girls: hardworking eldest sister Meg, headstrong, impulsive Jo, timid Beth, and precocious Amy. With their father away at war, and their loving mother Marmee working to support the family, the four sisters have to rely on one another for support as they endure the hardships of wartime and poverty. We witness the sisters growing up and figuring out what role each wants to play in the world, and, along the way, join them on countless unforgettable adventures.",
  backgroundColor: "rgba(0, 77, 0,0.8)",
  navTintColor: "#FFF",
};
const bookRoyalHoliday = {
  id: 5,
  bookName: "Royal Holiday",
  bookCover: images.royalHoliday,
  rating: 4.5,
  language: "Eng",
  pageNo: 300,
  author: "Jasmine Guillory",
  genre: ["Romance"],
  link:
    "https://www.amazon.com/dp/1984802216?ots=1&linkCode=ogi&tag=oprah-auto-20&ascsubtag=[artid|10072.a.29576863[src|[ch|[lt|",
  description:
    "Vivian Forest has been out of the country a grand total of one time, so when she gets the chance to tag along on her daughter Maddie’s work trip to England to style a royal family member, she can’t refuse. She’s excited to spend the holidays taking in the magnificent British sights, but what she doesn’t expect is to become instantly attracted to a certain private secretary, his charming accent, and unyielding formality.",
  backgroundColor: "rgba(204, 255, 204,0.9)",

  navTintColor: "#000",
  isActive: false,
};
const bookQueenOfHearts = {
  id: 6,
  bookName: "Queen of Hearts",
  bookCover: images.queenOfHearts,
  rating: 4.5,
  language: "Eng",
  pageNo: 245,
  author: "Kimmery Martin",
  genre: ["Romance"],
  link:
    "https://www.amazon.com/dp/0399585893?ots=1&linkCode=ogi&tag=oprah-auto-20&ascsubtag=[artid|10072.a.29576863[src|[ch|[lt|",
  description:
    "Zadie Anson and Emma Colley have been best friends since their early twenties, when they first began navigating serious romantic relationships amid the intensity of medical school. Now they're happily married wives and mothers with successful careers--Zadie as a pediatric cardiologist and Emma as a trauma surgeon. Their lives in Charlotte, North Carolina, are chaotic but fulfilling, until the return of a former colleague unearths a secret one of them has been harboring for years.",
  backgroundColor: "rgba(194, 240, 240,0.9)",

  navTintColor: "#000",
  isActive: false,
};
const bookTheBookOfUnseenWorld = {
  id: 7,
  bookName: "The Unseen World",
  bookCover: images.theBookOfUnseenWorld,
  rating: 4,
  language: "Eng",
  pageNo: 200,
  author: "Liz Moore",
  genre: ["Drama"],
  link:
    "https://www.amazon.com/Unseen-World-Novel-Liz-Moore-ebook/dp/B016E0RP52",
  description:
    "Ada Sibelius is raised by David, her brilliant, eccentric, socially inept single father, who directs a computer science lab in 1980s-era Boston. Home-schooled, Ada accompanies David to work every day; by twelve, she is a painfully shy prodigy. The lab begins to gain acclaim at the same time that David’s mysterious history comes into question. When his mind begins to falter, leaving Ada virtually an orphan, she is taken in by one of David’s colleagues. Soon she embarks on a mission to uncover her father’s secrets: a process that carries her from childhood to adulthood. What Ada discovers on her journey into a virtual universe will keep the reader riveted until The Unseen World’s heart-stopping, fascinating conclusion. ",
  backgroundColor: "rgba(255, 235, 204,0.9)",

  navTintColor: "#000",
  isActive: false,
};
const bookWelocmeToTheJungle = {
  id: 8,
  bookName: "Welcome To The Jungle",
  bookCover: images.welcometoTheJungle,
  rating: 4,
  language: "Eng",
  pageNo: 150,
  author: "Hillary T. Smith",
  genre: ["Adventure"],
  link:
    "https://www.amazon.com/Welcome-Jungle-Everything-Bipolar-Freaked/dp/1573244724",
  description:
    "Going bravely where no other bipolar book has gone before, here Hilary Smith offers devastatingly on-target, honest--and riotously funny--insights into living with bipolar and answers some of the hardest questions facing her fellow bipolaristas:  Can anything ever be the same again?  Am I still me if I take mind-altering meds? Can other people tell I have bipolar?  Can I get this thing removed?",
  backgroundColor: "rgba(179, 230, 179,0.9)",
  navTintColor: "#000",
  isActive: false,
};
const bookBreadcrumbs = {
  id: 9,
  bookName: "Breadcrumbs",
  bookCover: images.breadcrumbs,
  rating: 4,
  language: "Eng",
  pageNo: 200,
  author: "Anne Ursu",
  genre: ["Adventure"],
  link: "https://www.amazon.com/Breadcrumbs-Anne-Ursu-ebook/dp/B004V5199G",
  description:
    "The winner of numerous awards and recipient of four starred reviews, Anne Ursus Breadcrumbs is a stunning and heartbreaking story of growing up, wrapped in a modern-day fairy tale.Once upon a time, Hazel and Jack were best friends. But that was before he stopped talking to her and disappeared into a forest with a mysterious woman made of ice. Now it's up to Hazel to go in after him. Inspired by Hans Christian Andersen's The Snow Queen,Breadcrumbs is a stunningly original fairy tale of modern-day America, a dazzling ode to the power of fantasy, and a heartbreaking meditation on how growing up is as much a choice as it is something that happens to us.",
  backgroundColor: "rgba(204, 235, 255,0.9)",
  navTintColor: "#000",
  isActive: false,
};
const bookZinnedAndTheBees = {
  id: 10,
  bookName: "Zinned And The Bees",
  bookCover: images.zinnidAndTheBees,
  rating: 4,
  language: "Eng",
  pageNo: 200,
  author: "Sofía Segovia ",
  genre: ["Adventure"],
  link:"https://www.amazon.com/Murmur-Bees-Sofia-Segovia-ebook/dp/B07GNCQXXB/",
  description:"From a beguiling voice in Mexican fiction comes an astonishing novel—her first to be translated into English—about a mysterious child with the power to change a family’s history in a country on the verge of revolution.From the day that old Nana Reja found a baby abandoned under a bridge, the life of a small Mexican town forever changed. Disfigured and covered in a blanket of bees, little Simonopio is for some locals the stuff of superstition, a child kissed by the devil. But he is welcomed by landowners Francisco and Beatriz Morales, who adopt him and care for him as if he were their own. As he grows up, Simonopio becomes a cause for wonder to the Morales family, because when the uncannily gifted child closes his eyes, he can see what no one else can—visions of all that’s yet to come, both beautiful and dangerous. Followed by his protective swarm of bees and living to deliver his adoptive family from threats—both human and those of nature—Simonopio’s purpose in Linares will, in time, be divined.",
  backgroundColor: "rgba(255, 255, 179,0.9)",
  navTintColor: "#000",
};
const myBooksData = [
  {
    ...bookAliceInWonderland,
  },
  {
    ...bookTheBootedCat,
  },
  {
    ...bookTheArrivalOfSomeday,
  },
  {
    ...bookWelocmeToTheJungle,
  },
  {
    ...bookBreadcrumbs,
  },
  {
    ...bookLittleWomen,
  },
  {
    ...bookQueenOfHearts,
  },
  {
    ...bookRoyalHoliday,
  },
  {
    ...bookTheBookOfUnseenWorld,
  },
  {
    ...bookZinnedAndTheBees,
  },
];

export default myBooksData;
