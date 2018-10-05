


    var url = `https://discordapp.com/api/guilds/406653822929207298/widget.json`;

try {
    $.get(url, {"Content-Type": "application/json"},function( start ) {
        var content = "#n1"


    start.members.forEach(function(element) {
        switch (`${element.status}`) {
            case "online":
                col = "green"
                img = `<i style='font-size: 10px;' class="small material-icons ${col}">a</i>`;
                stat = `Online`;
                break;
            case "idle":
                col = "yellow darken-1"
                img = `<i style='font-size: 10px;' class="small material-icons ${col}">a</i>`;
                stat = `Idle`;
                break;
            case "dnd":
                col = "red"
                img = `<i style='font-size: 10px;' class="small material-icons ${col}">a</i>`;
                stat = `Do Not Disturb`;
                break;
            
        }
        if (!element.game) {
			var game = `None`
		} else {
			var game = element.game.name;
		}

        if (element.bot === true) {
            var bot = `<span class="botTagRegular-2HEhHi botTag-2WPJ74 bot-2Fta1w">BOT</span>`;
        } else {
            var bot = "";
        }
        $(content).append(
            `<li class="collection-item avatar">
                <img src="${element.avatar_url}" title="${element.username}" class="circle">
                 <span class="title"><b> ${element.username}#${element.discriminator}${bot}</b></span>
                    <p><b>Status:</b> ${stat} ${img}
                     <br>
                     <b>Activity:</b> ${game}
                     </p>
             
              </li>`
            )
            
    });
    });
} catch (err) {
    $(content).append(`<p4 class="white">An Error Occured.</p4>`)
    console.log(err)
}
























