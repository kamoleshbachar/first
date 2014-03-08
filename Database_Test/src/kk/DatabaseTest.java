package kk;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

import org.testng.annotations.Test;

public class DatabaseTest {
	
	
	Connection con = null;
	String driver = "com.mysql.jdbc.Driver";
	String url = "jdbc:mysql://localhost:3306/";
	String dbName = "business";
	String userName = "root";
	String pass = "kamolesh";
	
	@Test
	public void t() throws SQLException{
		
		try{
		
		Class.forName(driver).newInstance();
		
		con = DriverManager.getConnection(url+dbName, userName, pass);
		
		Statement st = con.createStatement();
		ResultSet rs =st.executeQuery("select * from pass_info");
		
		//rs.next();
		
		
		while (rs.next()) {
			System.out.println(rs.getString(1)+"  "+rs.getString(2)+"  "+rs.getString(3)+"  "+rs.getString(4)
				+"  "+rs.getString(5)+"  "+rs.getString(6)+"  "+rs.getString(7)+"  "+rs.getString(8)
				+"  "+rs.getString(9)+"  "+rs.getString(10));
		}
		
		System.out.println("*********************************************");
		
		PreparedStatement ps =con.prepareStatement("select * from pass_info where State = ? and F_Name = ?");
		ps.setString(1, "NY");
		ps.setString(2, "kamolesh");
		ResultSet rs1 = ps.executeQuery();
		
		while (rs1.next()) {
			System.out.println(rs1.getString(1)+"  "+rs1.getString(2)+"  "+rs1.getString(3)+"  "+rs1.getString(4)
				+"  "+rs1.getString(5)+"  "+rs1.getString(6)+"  "+rs1.getString(7)+"  "+rs1.getString(8)
				+"  "+rs1.getString(9)+"  "+rs1.getString(10));
		}
		
		
		PreparedStatement ps1 =con.prepareStatement("insert into pass_info values(?,?,?,?,?,?,?,?,?,?)");
		ps1.setString(1, "161149");
		ps1.setString(2, "Bit");
		ps1.setString(3, "Tech");
		ps1.setString(4, "1144 Zarica Ave");
		ps1.setString(5, "Bronx");
		ps1.setString(6, "NY");
		ps1.setString(7, "11452");
		ps1.setString(8, "USA");
		ps1.setString(9, "718456987");
		ps1.setString(10, "bittech@bittech.com");
		
		ps1.executeUpdate();
		
	
		
		}catch(Exception e){
			e.printStackTrace();
		}finally{
			con.close();
		}
		
	}
	
}
