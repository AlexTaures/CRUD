<style>
html, body{
  width: 100%;
  height: 100%;
  margin: 0;
  background-color: #007ced;
	background: linear-gradient(to bottom, #007ced 1%,#cce7ff 100%);
  overflow: hidden;
}

.row{
  width: 1000px;
  margin: auto;
}

table {
  width: 1000px;
  margin: 15px 10px;
  border: 2px solid rgb(255, 255, 255);
  box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);
  background: rgba(255, 255, 255, 0.2);
}

table th{
  padding: 0px 15px;
  align-items: center;
  text-align: left;
  background: rgba(255, 255, 255, 0.5);
}

/*Container */
.container{
  margin-top: 15px;
  width:600px;
  padding-bottom: 15px;
  margin: auto;
  box-shadow: 2px 2px 2px 3px rgba(0, 0, 0, 0.2);
  padding-left: 15px;
  background: rgba(255, 255, 255, 0.2);
}

.sub-container{
  padding-left: 10px;
}

label, input, select{
height: 20px;
margin: 5px;
}

label{
  width: 120px;
}

input{
  width: 125px;
}

/*Button styles */
.view-button{
  background: #387272;
  border-radius: 15%;
  color: white;
  margin-left: 15%;
}

.view-button:hover{
  background: black;
}

.register-button, .submit-button, .edit-button, .update-button{
  margin-top: 15px;
  height: 25px;
  background: #0080ff;
  border-radius: 5px;
  color: white;
  font-size: 1.10em;
  margin-left: 500px;
}

.register-button:hover, .submit-button:hover, .edit-button:hover, .update-button:hover{
  background: #0055aa;
  font-size: 1.15em;
}

.delete-button{
  margin-top: 15px;
  background: #f20000;
  border-radius: 5px;
  color: white;
  font-size: 1.10em;
  margin-left: 20px;
}

.delete-button:hover{
  background: #ce0000;
  font-size: 1.15em;
}

.index-button{
  height: 30px;
  margin: 5px;
  margin-left: 50px;
  background: #0071e1;
  color: white;
}

.index-button:hover{
  background: #0057ae;
  font-size: 1em;
}

/*header---------- */
header{
  background: rgb(0, 0, 0, 0.2);
  margin: 0;
  padding: 0;  
}

.todays-date{
  height: 30px;
  margin: 5px;
  margin-right: 50px;
  color: white;
  padding-top: 5px;
}

.banner{
  height: 30px;
  width: 75%;
  margin: 5px;
  color: white;
  padding-top: 5px;
  text-align: center;
}

/*footer------------ */
footer{
  position: fixed;
  bottom: 0;
  text-align: center;
  width: 100%;
  background: rgb(0, 0, 0, 0.2);
  color: white;
}

form{
  margin-top: 20px;
}

</style>