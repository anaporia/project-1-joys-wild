let guestbookEntries = [                                // 1 - We create a set of fake data to begin with //
    {
        Message: "This site is full of super funny !! I'd visit it again and again just for the gifs xDD",
        Date: "Sep 15, 2018 12:50"
    },
    {
        Message: "Truth to be told, my budget on socks has increased considerably since I arrived to the Wild School",
        Date: "Sep 17, 2018 03:30"
    },
    {
        Message: "For the moment we do not have CSS but it will come !!",
        Date: "Sep 18, 2018 07:45"
    },
    {
        Message: "I am most certainly in the future, as we already had a few beers and well ... the date is weird ...",
        Date: "Sep 19, 2018 18:50"
    }
];

function postGuestbook() {                                  			// 12 - make the appearance of the guestbook as a function to later use it
    const guestbook = document.querySelector("#book");      			// 2 - this tells us which place we are going to put stuff into, in this case is the UL with ID book
    guestbook.innerHTML = null;                             			// 15 - We realize the list must be empty before we print it

    for (let currentEntry of guestbookEntries){             			// 3 - we will first create a list that displays all the previously stored messages //
        let postImage = document.createElement("div");
        let postMessage = document.createElement("div");      			// 4 - here we create a new html element with a newMessage variable, in this case a li //
        let postDate = document.createElement("div");

		postImage.classList.add("col-2", "imageGuest");
		postMessage.classList.add("col-8", "messageGuest");
		postDate.classList.add("col-2", "dateGuest");

        postMessage.innerHTML = currentEntry.Message;       			// 5 - this tells the class or id or whatever html element that inside itself there must be certain information //
        postDate.innerHTML = currentEntry.Date;

        guestbook.append(postImage);
        guestbook.append(postMessage);                       			// 6 - I am saying that on the ID that we identified before, we will now append the created LI
        guestbook.append(postDate);
    }
};

function writeDate(todayDate){
	return todayDate.toString().slice(4, 21).replace(" 2", ", 2");		// 17 - Function that converts the date on a string in the format we want
}

postGuestbook();                                            			// 14 - You realize there is no list to begin with so you put the list before any changes

let buttonGuestbook = document.querySelector("#buttonGuestbook");    	// 7 - Tell to get the element button
    buttonGuestbook.addEventListener("click", function(){               // 8 - Add event click to the element button

//    let newMessage = prompt("Write a new message: ");               	// 9 - Ask user the info, I have to change this to a get string from Text-area field
    let newMessage = document.querySelector("textarea").value;          // 9 - Info comes from the textarea box and .value gets the inside of the box
    let today = new Date();

    let newEntry = {                                            		// 10 - Create a new entry for the guestbookEntries with a message as the received info
        Message: newMessage,
        Date: writeDate(today)											// 16 - Define a new date for each entry that calls a function to write the proper date
    };

    guestbookEntries.push(newEntry);                            		// 11 - Put the new entry as part of the Guestbook array
    postGuestbook();                                            		// 13 - Make the list appear once the data is asked and can be added to show

    document.querySelector("textarea").value = null;					// 18 - Empty the textarea box after the message has been sent

    });