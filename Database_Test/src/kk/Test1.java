package kk;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;

import org.testng.annotations.Test;

public class Test1 {

	
		
		
		Connection con = null;
		String driver = "com.mysql.jdbc.Driver";
		String url = "jdbc:mysql://localhost:3306/";
		String dbName = "business";
		String userName = "root";
		String pass = "kamolesh";
		
		@Test
		public  void tet() {
			try{
			Class.forName(driver).newInstance();
			
			con = DriverManager.getConnection(url+dbName, userName, pass);
			
			Statement st = con.createStatement();
			ResultSet rs =st.executeQuery("select * from pass_info");
			
			
			//rs.next();
			
			//System.out.println(rs.getString(1)+"  "+rs.getString(2)+"  "+rs.getString(3)+"  "+rs.getString(4));
			//rs.next();
			
			//System.out.println(rs.getString(1)+"  "+rs.getString(2)+"  "+rs.getString(3)+"  "+rs.getString(4));
			
			while(rs.next()){
				System.out.println(rs.getString(1)+"  "+rs.getString(2)+"  "+rs.getString(3)+"  "+rs.getString(4));

			}
			
			}catch(Exception e){
				
			}
	}

}
