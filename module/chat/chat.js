

function updateMessage() {

    $bottom=false;
    element = document.getElementById('chat');
     if(element.scrollHeight- element.scrollTop - element.offsetHeight< 10 ) //savoir si le scroll est en bas  pour la ordure 
        //inferieur a 20 car le nombre de pixel n'est pas stable il varie entre 1 et 3 quand le scroll est en bas
            {
                $bottom = true; //permet de scroll vers le bas une fois que des nouveaux essages sont chargés


            }
    $.ajax({ //mise a jour du fichier json
        url: 'http://127.0.0.1/EntraideMVC/module/chat/getBD.php',
        method: 'post',
        success: function(data) {
            console.log("Mise a jour du fichier JSON");
        },
        error: function() {
            console.log("Erreur de mMise a jour du fichier JSON");
        }
    })
     

    $.getJSON('http://127.0.0.1/EntraideMVC/module/chat/chat.json', function(data) { //récupère le JSON et remplit le chat
       // console.log("Chargement fichier JSON finit");
        $('#chat').empty(); //vide le chat
        var lenght = 0; //récupère le nombre de chat
        for (var x in data) { //permet de connaitre le nombre de messages dans le chat
            if (data.hasOwnProperty(x)) {
                lenght++;
            }
            //console.log(lenght);
        }
        for (var i = 0; i < lenght; i++) { //boucle qui affiche le chat
            message = data[i];
            $('#chat').append('<p>' + data[i].date + ' => ' + data[i].loginUser + ':    ' + data[i].text);
        }


    })
    console.log($bottom);
    if ($bottom == true){  //met le scroll en bas que si le scroll était déja en bas avant le rajout des messages
         setTimeout(bottomScroll, 100)    
    }
};


$(document).ready(function() { //envoi le message à la bdd
    $('#envoyer').click(function() {
        $.ajax({
            url: 'http://127.0.0.1/EntraideMVC/module/chat/updateBD.php',
            method: 'post',
            data: {
                text: $('#message').val()
            }, //text a envoyer. Le nom de l'utilisateur est déja dans la session
            success: function(data) {
                console.log("envoie du message réussie");
            },
            error: function() {}
        });
        document.getElementById('message').value = ""; //refresh de la zone de saisie
        document.getElementById('message').focus();
        updateMessage();
        setTimeout(bottomScroll, 100) 
    });
});


function bottomScroll(){ 
element = document.getElementById("chat");
element.scrollTop = element.scrollHeight; //met le scroll en bas 
}

function EntreChat(e) { //permet d'envoyer le message avec la touche entrée
    if (e.keyCode == 13) {
        document.getElementById("envoyer").click();
        return false; //ne recharge pas la page
    }
}




updateMessage(); //charge quand on arrive sur la page

setInterval(updateMessage, 3000); //refresh toute les sec



setTimeout(bottomScroll, 1000)  //laisse le temps au chat de charger avant de scroll vers le bas 
//Sinon il scroll vers le bas avant que le chat soit chargé


