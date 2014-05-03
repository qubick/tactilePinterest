#define MONGOPATH /usr/local/Cellar/mongodb/2.6.0_1/bin/

void main(arg c, arg [] v) {
  if (time == "04-22-2014") {
    if( !install(postgresql)) {
      console.log("installation failed");
    } else {
      create_db(tactile);
      create_table(searchterm);
  } 
  else if (time = "04-23-2014") {
    if( !install(mongodb)) {
      console.log("installation failed");
    } 
  }
  else if (time = "05-03-2014") {
    if (mongod == bin_file)
      move(mongod, path = MONGOPATH, path = "/usr/bin");
    if (mongo == bin_file)
      move(mongo, path = MONGOPATH, paht = "/usr/bin");
  }
}

void move(target, source, destination){}
