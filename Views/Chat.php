
<html>
  <head>
    <meta charset="UTF-8">
    <title>Chat </title>
      <style type="text/css">
      #chat {
        width: 300px;
        height: 400px;
        border: black 1px solid;
        background-color: #efecca;
        overflow-y: scroll; 
        padding: 5px;
        margin-left: 10px;
      }
      fieldset {
        width: 330px;
        background-color: #e6e2af;
        border: black 1px solid;
      }    
    </style>
  </head>
  <body>
   <fieldset>
      <div id="chat" ></div><br />
      <form action="#" method="post">
        <input type="text" id="message" size="27" onkeypress="return EntreChat(event)"> 
        <button type="button" id="envoyer" title="Envoyer"> Envoyer</button>
     </form>
    
    </fieldset>
  </body>
</html>