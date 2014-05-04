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
  set_up(apache, php5)
    follow_instruction("http://php.about.com/od/phpbasics/ss/installMac.htm");
    move("index.php", path = "Library/WebServer/Documents/");
    
    uncomment("extension=php_pgsql.dll", PATH="/private/etc/php.ini");
    edit(/etc/profile){
      attache("export PATH=/Library/PostgreSQL/9.3/bin:$PATH"); //add postgres binary files path
    }
    if(sudo passwd postgres = "******") { //reset password for postgres
      change_user_by("su - postgres"); //CLI connect to the psql
      connect_to_postgresql(host=localhost, db=dbname, user=postgres, password="******");
    }
    
    write(
        "ini_set('display_errors', '1')",
        "error_reporting(#_ALL | E_STRICT)",
        top_of_php_script
      )
}

void move(target, source, destination){}
