/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package comunicacao;

/**
 *
 * @author rafae
 */
public class Protocolo {

    private String vazao;
    private String residencia;

    
    private String leituraComando;
private void interpretaComando(){
    String aux[] = leituraComando.split("','");
    if (aux.length == 2)
    vazao = aux[0];
    residencia = aux[1];
    
}
   

   

    public String getVazao() {
        return vazao;
    }

    public void setVazao(String vazao) {
        this.vazao = vazao;
    }

    public String getResidencia() {
        return residencia;
    }

    public void setResidencia(String residencia) {
        this.residencia = residencia;
    }



    public String getLeituraComando() {
        return leituraComando;
    }

    public void setLeituraComando(String leituraComando) {
        this.leituraComando = leituraComando;
       this.interpretaComando();
    }
    
    
}
