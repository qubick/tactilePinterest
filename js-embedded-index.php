<html>
	<head>
<title>3D tactile book twitter information</title>
       <style type="text/css">
 
       * {
 
       }
       body {
          font:400 14px/1.6 "Open Sans", sans-serif;
          font-family: "Open Sans", sans-serif;
          font-size: 14px;
          font-style: normal;
          font-variant: normal;
          font-weight: 400;
          line-height: 1.6;
          color: #666;
    }
       h1, h2, h3 {
          margin: 5px 0;
          font-weight: normal;
          color: #353535;
          -webkit-fontsmoothing: anthialiased;
    }
       p {
          margin: 20px 0;
    }
       p code {
          background: #efefef;
          border: 1px solid #eaeaea;
          font-family: monaco, monospace;
          font-size: .75em;
          padding: 2px 8px;
          -webkit-border-radius: 3px;
       }
       section section p {
          width: 60%;
    }
       h3 {
          background: /* url(/images/hr.png) */ top center no-repeat;
          margin-top: 40px;
          padding-top: 50px;
          padding-bottom: 5px;
          font-weight: bold;
       }
       /* links */
          a {
             color: #259dff;
             text-decoration: none;
       }
          a:hover {
             text-decoration: underline;
       }
      /* clear fix */
          .clearfix:after {
             content: ".";
             display: block;
             clear: both;
             visibility: hidden;
             line-height: 0;
             height: 0;
       }
          .clearfix {
             display: inline-block;
       }
          html[xmlns] .clearfix{
             display: block;
       }
          *html .clearfix {
          height: 1%;
       }
          .title {
             display: block;
             font: 60px "Helvetica Neue", Helvetica, Arial, sans-serif;
             font-weight: 100;
             color: #353535;
             width: 100%;
       }
          .description {
             position: relative;
             top: -5px;
             font: 100 60px "Helvetica Neue", Helvetica, Arial, sans-serif;
             color: #cecece;
             line-height: .80;
       }
          .nav {
             position: fixed;
             top: 20px;
             right: 15px;
             z-index: 100;
       }
          .nav a{
             margin: 0 5px;
             padding-right: 15px;
             border-right: 1px dotted #eee;
       }
          #content {
				 margin-left: 80px;
             width: 900px;
             margin-bottom: 80px;
       }
          #logo em {
             font-style: normal;
             font-weight: 100;
             font-size: 9px;
             color: #999;
            margin-left: 5px;
       }
          #logo a:hover {
             text-decoration: none;
             color: #858585;
       }
 
       /* boxes for separate blocks */
          #boxes {
             background: /*url(/images/hr.png)*/ top center no-repeat; */
             margin-left: 50px;
             padding-top: 50px;
             padding-bottom: 50px;
             font-size: 12px;
       }
          #boxes section {
             width: 180px;
             margin: 0 25px;
             float: left; /* display boxes horizontally */
             min-height: 200px;
       }
          #boxes h3{
             background: none;
             margin-top: 0;
             padding-top: 0;
       }
          #boxes section p {
             width: 100%;
             margin-top: 5px;
             margin-bottom: 20px;
          }
    </style>
	</head>

	<body>

<section id="content">
   <header>
          <section id="logo">
          <a href="http://tactilepicturebooks.org" class="title" target="new"    >Tactile Book</a>
          <br>
             <span class="description">
                   web aplication <br>
                   collects search term and <br>
                   retrieves related information<br>
                   from
                <a href="http://twitter.com" target="new"> twitter </a>
             </span>
          </section>
 
          <nav class="nav">
             <a href="#content" class="active">Home</a>
             <a href="#intro" class="">Tweets</a>
             <a href="#twt-widget" class="">Widget</a>
             <a herf="http://tweeter.com" target="_blank" class="">Timeline</a>
          </nav>
          </header>
       </section>
 
       <section id="json">

 <!-- a href="data3.json" target="_blank"> Open JSON file</a -->
          <br>
          <p>
          <input type="text" id="hashList" placeholder="type hashtags" onfocu    s="this.placeholder = ''" onblur="this.placeholder = 'enter your text'" />
          <input type="submit" value="Add Hashs" class="button" id="btn">

<?php
	echo "doc is ready\n";

	ini_set('display_errors', '1');
	error_reporting(E_ALL | E_STRICT);

	$conn = pg_pconnect("host=localhost port=5432 dbname=tactile user=postgres password=akf493");
	
	if (!$conn) {
	echo "Cannot access to the db.\n";
	    exit;
} else {
	echo "Connected to the tactile";


//	$result = pg_query($conn, "SELECT author, email FROM authors");
//	if (!$result) {
//	  	echo "Can't get query result.\n";
//	    exit;
//		}

//		while ($row = pg_fetch_row($result)) {
//	  		echo "Author: $row[0]  E-mail: $row[1]";
//	    	echo "\n";
//		}
		echo '<script type="text/javascript">';
		echo 'alert("javascript is embedded")';
		echo '</script>';
	
	}
?>
      <span id="result"></span>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jqu    ery.min.js"></script>
      <script type="text/javascript">
             $(document).ready(function(){
               alert("DOM ready");
               var stream = "";
					var tagCnt = 0;

                //after DOM is ready, attach button click event
                $('#btn').click(function(){
                   alert("inside btn click event");

                   var x = document.getElementById("hashList").value;
                   if(!(y = x.match(/#(.)*\b/g))){ '; //regex for hash validation
                      alert("Hashtag should be followed by special character     #");
                   } else {
                      stream  = stream + '\t' + x;
                      //this stream need to save to RDB
                     if(tagCnt === 0){
                         $('#first_h3').html(x);
                         //data from DB
                         var string0 = "Lorem Ipsum is simply dummy text of t    he printing and typesetting industry. Lorem Ipsum has been the industrys st    andard dummy text ever since the 1500s, when an unknown printer took a galle    y of type and scrambled it to make a type specimen book. It has survived not     only five centuries, but also the leap into electronic typesetting, remaini    ng essentially unchanged. It was popularised in the 1960s with the release o    f Letraset sheets containing Lorem Ipsum passages, and more recently with de    sktop publishing software like Aldus PageMaker including versions of Lorem I    psum.";
                         $('#first_twt').html(string0);
							} else if(tagCnt === 1) {
                         $('#second_h3').html(x);
                         //data from DB
                         var string1 = "It is a long established fact that a     reader will be distracted by the readable content of a page when looking at     its layout. The point of using Lorem Ipsum is that it has a more-or-less nor    mal distribution of letters, as opposed to using";
                         $('#second_twt').html(string1); 
                      } else if(tagCnt === 2) {
                         $('#third_h3').html(x);
                         //data from DB
                         var string2 = "Contrary to popular belief, Lorem Ips    um is not simply random text. It has roots in a piece of classical Latin lit    erature from 45 BC, making it over 2000 years old. Richard McClintock, a Lat    in professor at Hampden-Sydney College in Virginia, looked up one of the mor    e obscure Latin words, consectetur, from a Lorem Ipsum passage, and going th    rough the cites of the word in classical literature, discovered the undoubta    ble source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of (The Extremes of Good and Evil) by Cicero, written in     45 BC. This book is a treatise on the theory of ethics, very popular during     the Renaissance. The first line of Lorem Ipsum, comes from a line in section 1.10.32.";
                         $('#third_twt').html(string2);
							 } else if(tagCnt === 3) {
                         $('#fourth_h3').html(x);
                         //data from DB
                         var string3 = "There are many varia:tions of passage    s of Lorem Ipsum available, but the majority have suffered alteration in som    e form, by injected humour, or randomised words which dont look even slight    ly believable. If you are going to use a passage of Lorem Ipsum, you need to     be sure there isnt anything embarrassing hidden in the middle of text. All     the Lorem Ipsum generators on the Internet tend to repeat predefined chunks     as necessary, making this the first true generator on the Internet. It uses     a dictionary of over 200 Latin words, combined with a handful of model sent    ence structures, to generate Lorem Ipsum which looks reasonable. The generat    ed Lorem Ipsum is therefore always free from repetition, injected humour, or     non-characteristic words etc.";
                         $('#fourth_twt').html(string3);
                      }
                   //clear filed
                      document.getElementById("hashList").value = "";
                      tagCnt++;
 
                      $('#result').html(stream);
                   }

                   //start ajax request
                   $.ajax({
                      url:"data3.json",
                      //force to handle it as text
                      dataType: "text",
                      success: function(data){
 //                      alert(data); //data is text
 
                         var json = $.each($.parseJSON(data), function(){
                            //alert(this.keywords); //json is object
                            
                            var tags = this.keywords;
                            alert(tags);
                            for (var i in tags){
                               var res = tags[i].match(a/tag); //matching reg    exs
                               if(res){
                      //          $('#result').html('user: ' + this.name + '<    br />keywords: ' + this.keywords);
                                  $('#results').html(res);
                               } //end of if
                            } //end of for 
                         }); //end of each
                      } // end of success callback function()   
                }); //end of $.ajax
             });
          });
       </script>
       </p>
       </section>

<?php

echo '	<section id="twt-widget">
       <a class="twitter-timeline" 
          data-dnt="true" 
          href="https://twitter.com/iamqubick/printing3d" 
          data-widget-id="451050605256007680">Tweets from https://twotter.com/iamqubick/print    ing3d</a>
 
       <script>
       //customized timeline widget for 3d printing list
          !function(d,s,id){
             var js,fjs = d.getElementsByTagName(s)[0],
                      p = /^http:/.test(d.location)?\'http\':\'https\';
             if( !d.getElementById(id) ){
                js = d.createElement(s);
                js.id = id;
                js.src = p + "://platform.twitter.com/widgets.js";
                fjs.parentNode.insertBefore(js,fjs);
             }
          }(document,"script","twitter-wjs");
		</script>
&nbsp; &nbsp;
 
       <a class="twitter-timeline" 
          href="https://twitter.com/search?q=%23tactile"
          data-widget-id="451052939755278336">Tweets about #tactile</a>
 
       <script>
       //customized timeline for #tactile hashtag
          !function(d,s,id){
             var js,fjs = d.getElementsByTagName(s)[0],
                      p = /^http:/.test(d.location)?\'http\':\'https\';
             if( !d.getElementById(id) ){
                     js = d.createElement(s);
                     js.id = id;
                     js.src = p + "://platform.twitter.com/widgets.js";
                     fjs.parentNode.insertBefore(js,fjs);
                     }
             }(document,"script","twitter-wjs");

		</script>
		</section>';
?>
</body>
</html>

