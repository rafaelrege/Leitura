/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package comunicacao;


import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

public class Conexao {
    String serverName = "localhost";
    String mydatabase = "bd_leitura";
    String url = "jdbc:mysql://" + serverName + "/" + mydatabase;
    String username = "root";
    String password = "";
    Connection conexao;
    
    /**
     *
     * @throws SQLException
     */
    public  Conexao() throws SQLException{
        conexao = DriverManager.getConnection(url, username, password);
    }
    
}