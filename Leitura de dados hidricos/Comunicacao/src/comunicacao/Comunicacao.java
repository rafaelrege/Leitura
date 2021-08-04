/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package comunicacao;


import java.sql.SQLException;



/**
 *
 * @author rafae
 */
public class Comunicacao {

    /**
     * @param args the command line arguments
     * @throws java.sql.SQLException
     */
    public static void main(String[] args) throws SQLException, InterruptedException { 
        SerialRxTx serial = new SerialRxTx();

        

//st.executeUpdate("insert into tb_leitura(vazao,residencia)values( '" +  + "')");
    
        System.out.println(serial.porta);
        

        if(serial.inicialSerial()){


            while(true){

                
                }
           
            }
        }
// TODO code application logic here
    }
    

