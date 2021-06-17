const http = require('http') //include http
const port = 3000

const server = http.createServer(function(req, res){
    res.write("Hello from res")
    res.end()
})

server.listen(port, function(error){
    if(error){
        console.log("Error while listening on port ", port, ": ", error)
    }else{
        console.log("Listening to port", port)
    }
})
