

window.onload = function() {
    // TODO:: Do your initialization job

    // add eventListener for tizenhwkey
    document.addEventListener('tizenhwkey', function(e) {
        if (e.keyName === "back") {
            try {
                tizen.application.getCurrentApplication().exit();
            } catch (ignore) {}
        }
    });

 // select DB() is function with openDatabase
 
        selectDB();
 
    // Sample code
    
    var mainPage = document.querySelector('#signInSucceed');

    mainPage.addEventListener("click", function() {
    	 {
    		   
    		    String driver = "com.mysql.jdbc.Driver"; // 드라이버 이름 지정
    		    String user = "root";
    		    String password = "1234";
    		    String DBName = "test";
    		    String dbURL = "jdbc:mysql://localhost:3306/"+DBName; // URL 지정
    		    String SQL = "select * from Persons;";
    		    Connection conn;
    		      
    		    Class.forName(driver); // 드라이버 로드
    		    conn  = DriverManager.getConnection(dbURL,user,pass); // 연결
    		    
    		    con.close();
    		    
    	 }
    		   

        window.location.replace("p3_list.html");
        
    }); 

}
