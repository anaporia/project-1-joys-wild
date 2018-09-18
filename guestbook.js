
let comment = [
{"name": "Erendira Retana", "posttime": "20 Septembre 2018", "body": "This is a comment."}
{"name": "Steven Antal", "posttime": "21 Septembre 2018", "body": "Everything rules."}
{"name": "Emilie Boeglen", "posttime": "22 Septembre 2018", "body": "I need coffee."}
];

for (let i = 0; i < comment.length, i++){
	let html = "<section id='commentBox'><div class='row px-4 py-4'><div class='col-2 left-pane d-flex justify-content-center px-0'><img src='https://via.placeholder.com/150x150'></div><div class='col-10 right-pane d-flex justify-content-around px-0 flex-column'><span>" + comment[i].name + "</span><span>" + comment[i].posttime + "</span><p>" + comment.body + "This is a super website, <br>I love it !</p></div></div></section>";
}



/*let guestbook = [];


function myFunction(){
guestbook.push(document.getElementById("comment"));
}

console.log(guestbook);*/