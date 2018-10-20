 
   function start() {
    
    try {
        const code = document.querySelector("#console").value;
        let evaled = eval(code);
        const output = document.querySelector("#output").innerHTML;
        if (typeof evaled !== "string")
          evaled = require("util").inspect(evaled);
   
          document.querySelector("#output").innerHTML = (clean(evaled));
      } catch (err) {
          
        document.querySelector("#output").innerHTML = (`Error: \n${clean(err)}\n`);
      }
    


    function clean(text) {
      if (typeof(text) === "string")
        return text.replace(/`/g, "`" + String.fromCharCode(8203)).replace(/@/g, "@" + String.fromCharCode(8203));
      else
          return text;
    }
};