let guestbookEntries = [                                // 1 - We create a set of fake data to begin with //
    {
        Message: "It was good",
        Date: "Date1"
    },
    {
        Message: "So excellent",
        Date: "Date2"
    }
];

function postGuestbook() {                                  // 12 - make the appearance of the guestbook as a function to later use it
    const guestbook = document.querySelector("#book");      // 2 - this tells us which place we are going to put stuff into, in this case is the UL with ID book
    guestbook.innerHTML = null;                             // 15 - We realize the list must be empty before we print it

    for (let currentEntry of guestbookEntries){             // 3 - we will first create a list that displays all the previously stored messages //
        let postMessage = document.createElement("li");      // 4 - here we create a new html element with a newMessage variable, in this case a li //
        let postDate = document.createElement("li");

        postMessage.innerHTML = currentEntry.Message;        // 5 - this tells the class or id or whatever html element that inside itself there must be certain information //
        postDate.innerHTML = currentEntry.Date;
        guestbook.append(postMessage);                       // 6 - I am saying that on the ID that we identified before, we will now append the created LI
        guestbook.append(postDate);
    }
};

postGuestbook();                                            // 14 - You realize there is no list to begin with so you put the list before any changes

let buttonGuestbook = document.querySelector("#buttonGuestbook");    // 7 - Tell to get the element button
    buttonGuestbook.addEventListener("click", function(){               // 8 - Add event click to the element button

    let newMessage = prompt("Write a new message: ");               // 9 - Ask user the info, I have to change this to a get string from Text-area field

    let newEntry = {                                            // 10 - Create a new entry for the guestbookEntries with a message as the received info
        Message: newMessage,
        Date: "Date3"
    };

    guestbookEntries.push(newEntry);                            // 11 - Put the new entry as part of the Guestbook array
    postGuestbook();                                            // 13 - Make the list appear once the data is asked and can be added to show
    });




//const response = prompt("What is your message ?");