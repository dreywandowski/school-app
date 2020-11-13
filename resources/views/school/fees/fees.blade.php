
@extends('layout.application')

@section('content')

<!doctype html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
	<title> Pay Bills </title>
		<link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@300&display=swap" rel="stylesheet">

	
</head>
<style type="text/css">
	body{
		background-image: url(/../school/112185-OOJK89-558.jpg);
		background-size: cover;
          font-size: 22px;
    font-family: 'Zilla Slab', serif;
	}

a:link, a:visited {
  background-color: green;
  color: white;
  padding: 14px 25px;
  text-align: center; 
  text-decoration: none;
  display: inline-block;
  border-radius: 8px;
}

a:hover, a:active {
  background-color: red;
}
input {
    width: 15%;
    height: 25px;
    box-sizing: border-box;
}



button{
background-color: #4CAF50;
border: none;
border-radius: 15px;
color: white;
padding: 16px 32px;
text-decoration: none;
margin: 4px 2px;
cursor: default;
}

</style>



<body>
    
<p style='color:white'> <u>Make your payments here.<br></u></p>
<p style='color:red'> <u>Please note that your appointments will not be honoured if you haven't made a payment.</u></p><br><br>

<span id="ajax"></span><br><br>

<form id="lol">
   @csrf

   <label>Username</label><br>
    <input type="text" name="user" id="user" required><br><br>

	<label>Email Address</label><br>
		<input type="text" name="email" id="email" required><br><br>

		<label>Amount</label><br>
		<input type="number" name="amount" id="amount" required><br><br>

		<label>Phone number</label><br>
		<input type="text" name="phone" id="phone" required><br><br>
    
</form>


    <button type="button" id="pay">Pay Now</button><br><br>
    <a href="/school/student">Back</a>&nbsp

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://ravesandboxapi.flutterwave.com/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
<script type="text/javascript">


const API_publicKey = "FLWPUBK-902adba8d930e1d4748fd2554dec604b-X";

var pay = document.getElementById("pay");
pay.addEventListener("click", payWithRave, false);


    function payWithRave() {

      var user = document.getElementById("user").value;
    	 var email = document.getElementById("email").value;
    var amount = document.getElementById("amount").value;
    var number = document.getElementById("phone").value;

    function getRandomString(length) {
    var randomChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var result = '';
    for ( var i = 0; i < length; i++ ) {
        result += randomChars.charAt(Math.floor(Math.random() * randomChars.length));
    }
    return result;
}

var ref = getRandomString(13);

        var x = getpaidSetup({
            PBFPubKey: API_publicKey,
            customer_email: email,
            amount:amount,
            customer_phone: number,
            currency: "NGN",
            txref: getRandomString(13),
            meta: [{
                metaname: "flightID",
                metavalue: "AP1234"
            }],
            onclose: function() {},
            callback: function(response) {
                var txref = response.tx.txRef;
                var code = response.tx.chargeResponseCode; 
                var msg = response.data.respmsg;
                var amtt = response.tx.charged_amount;
                var status = response.tx.status;
                // collect txRef returned and pass to a                    server page to complete status check.
                console.log("This is the response returned after a charge", response);
                if ((code = "00") && (amtt == amount)){
                   // window.location = "handle_bills.php";
                console.log("Input amount " + amount +  "Proccessed amount" + amtt + txref);
               alert("Thanks for your payment. Check your email for confirmation");


 $.ajaxSetup({
              
    headers: {
        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
    }
              });


			/**	$.post("/school/fees/handle_bills.php", {
                        user : user,
                       email : email,
                       amount : amount,
                       ref : ref,
                       phone : number

				},  function(data,status){
					$("#ajax").html(data);

                });

                } **/


                $.ajax({
                  url: "{{ url('/school/fees') }}",
                  method: 'post',
                  data: {
                      user : user,
                      email : email,
                       amount : amount,
                       ref : ref,
                       phone : number,
                       
                  },
                  success: function(response){
                    $("#ajax").html(response);
                    $("#lol").reset();
                     
                  }

                });
}

                else {
                    // redirect to a failure page.
                }

                x.close(); // use this to close the modal immediately after payment.
            }
        });
    }

</script>

@endsection
	</body>
	</html>