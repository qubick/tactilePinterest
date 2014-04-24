var databaseUrl = "mydb";
var collections = ["users", "reports"]
var db = require("mongojs").connect(databseUrl, collections);

