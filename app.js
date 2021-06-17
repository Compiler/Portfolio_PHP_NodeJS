const http = require('http') //include http
const fs = require('fs')
const port = 3000

const server = http.createServer(function(req, res){
    res.writeHead(200, {'Content-Type' : 'text/html'})
    fs.readFile("index.php", function(error, data){
        if(error){
            res.writeHead(404)
            res.write("Error while finding html:", error)
        }else{
            res.write(data)
        }
        res.end()
    })
})

server.listen(port, function(error){
    if(error){
        console.log("Error while listening on port ", port, ": ", error)
    }else{
        console.log("Listening to port", port)
    }
})
