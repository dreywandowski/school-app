	$(document).ready(function() {

		// validates the user and kick starts the test

$("#game").click(function(event){
	            event.preventDefault();
	            var username = $("#name").val();
                var password = $("#number").val();

           $.post("validate_details.php", {
            	username : username,
            	password : password,

            }, function(data, status){
            	$("#ajax").html(data);
            	console.log(username, password);
            }); 
       });  


// hides the welcome message and loads test questions
$(document).on("click", "#dynamic", function(){
	$("#formOne").toggleClass("hidden");
	$("#begin, #text, #dynamic, #initial").hide();
});

// This holds all correct answers for each question
var numb = $('#a').val();
var numb1 = $('#f').val();
var numb2 = $('#j').val();
var numb3 = $('#o').val();
var numb4 = $('#q').val();


// This stores all the answers in an arrary for later use 
 var answers = [numb, numb1,numb2, numb3, numb4];

// this holds the scores for each question
var userScore = [];

// stores answered questions
var questions = [];

// the original questions
var query = [];

 

// NEXT BUTTON

// hides first question and loads next question
$("#firstNext").click(function(){
	$("#formTwo").show();
	$("#formOne").hide();

	function alertMe() {
	if($('input[name=answer]').is(':checked')) { 
		var answer = $('input[name=answer]:checked').val()
		questions.push(answer);
 	    console.log(questions);

 	    if(answer == numb){
 	    	userScore.push(3);
 	    	console.log(userScore);
 	    }
 	    else{
 	    	userScore.push(0);
 	    	console.log(userScore);
 	    }
 	 }
 	 query.push($("#formOne").text());
}
alertMe();
});

// hides second question and loads third question
$("#secondNext").click(function(){
	$("#formThree").show();
	$("#formTwo").hide();

	function alertMe() {
	if($('input[name=answer1]').is(':checked')) { 
		var answer = $('input[name=answer1]:checked').val()
		questions.push(answer);
 	    console.log(questions);

 	    if(answer == numb1){
 	    	userScore.push(3);
 	    	console.log(userScore);
 	    }
 	    else{
 	    	userScore.push(0);
 	    	console.log(userScore);
 	    }
 	 }
}
query.push($("#formTwo").text());

	alertMe();
});

// hides third question and loads fourth question
$("#thirdNext").click(function(){
	$("#formFour").show();
	$("#formThree").hide();

function alertMe() {
	if($('input[name=answer2]').is(':checked')) { 
		var answer = $('input[name=answer2]:checked').val()
		questions.push(answer);
 	    console.log(questions);

 	    if(answer == numb2){
 	    	userScore.push(3);
 	    	console.log(userScore);
 	    }
 	    else{
 	    	userScore.push(0);
 	    	console.log(userScore);
 	    }
 	 }
}
query.push($("#formThree").text());
	alertMe();
});

// hides fourth question and loads final question
$("#fourthNext").click(function(){
	$("#finalForm, #final").show();
	$("#formFour").hide();

function alertMe() {
	if($('input[name=answer3]').is(':checked')) { 
		var answer = $('input[name=answer3]:checked').val()
		questions.push(answer);
 	    console.log(questions);

 	    if(answer == numb3){
 	    	userScore.push(3);
 	    	console.log(userScore);
 	    }
 	    else{
 	    	userScore.push(0);
 	    	console.log(userScore);
 	    }
 	 }
}
query.push($("#formFour").text())
	alertMe();
});


// hides final question, computes final score, sends to the server and redirects to front page
$("#final").click(function () {
	$("#finalForm").hide();
	$("#final_text").show();
	$(this).hide();

	function alertMe() {
	if($('input[name=answer4]').is(':checked')) { 
		var answer = $('input[name=answer4]:checked').val()
		questions.push(answer);
 	    console.log(questions);

 	    if(answer == numb4){
 	    	userScore.push(3);
 	    	console.log(userScore);
 	    }
 	    else{
 	    	userScore.push(0);
 	    	console.log(userScore);
 	    }
 	 }
}
query.push($("#finalForm").text());
console.log(query);
alertMe();
/**
// final scores
 function userScores(){
    var a = userScore;
    var sum = a.reduce(function(a, b) { return a + b; }, 0);
    console.log("total score is =  " + sum);
 }
 userScores();
}); 
**/
	//event.preventDefault();
	
var a = userScore;
var b = questions;
var c = query;
var sum = a.reduce(function(a, b) { return a + b; }, 0);
console.log(sum);

$.post("score.php", {
    score : sum,
    question : b,
    querys : c
}, function(data, status){
	//$('body').html(data);
	console.log(data, status);
});

}); 




// PREVIOUS BUTTON

//shows the first question and hides second question
$("#firstPrev").click(function(){
	$("#formOne").show();
	$("#formTwo").hide();
});

//shows the second question and hides third question
$("#secondPrev").click(function(){
	$("#formTwo").show();
	$("#formThree").hide();
});

//shows the third question and hides fourth question
$("#thirdPrev").click(function(){
	$("#formThree").show()
	$("#formFour").hide();
});

//shows the fourth question and hides final question
$("#finalPrev").click(function(){
	$("#formFour").show();
	$("#finalForm").hide();
});


});

