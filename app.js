const express= require('express');
const bodyparser = require('body-parser');
const cors = require('cors');
const app = express();
var Client = require('node-rest-client').Client;
var client = new Client();
app.use(bodyparser.urlencoded({extended:false}))
app.use(bodyparser.json());
app.use(cors())
app.post('/getLocations',(req,res)=>{
    
    client.get("https://maps.googleapis.com/maps/api/place/textsearch/json?query="+req.body.city+"+top+sights&key=AIzaSyCT7NOKUhf-SvUyw25T-o--Y5V0e-m85Dc",
     function (data, response) {
    res.json({msg:true, data:data})
})
});

app.listen(3001,()=>{
    console.log('lisitening to port 3001')
    
});