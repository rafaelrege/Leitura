#include <SoftwareSerial.h>

String residencia = "10";
String separador = "','";
float vazao; //Variável para armazenar o valor em L/min
float media = 0; //Variável para fazer a média
int contaPulso; //Variável para a quantidade de pulsos
int i = 0; //Variável para segundos
int Min = 00; //Variável para minutos
float Litros = 0; //Variável para Quantidade de agua
float MiliLitros = 0; //Variavel para Conversão
int contador = 0;
void setup()  {
 Serial.begin(9600);

 pinMode(2, INPUT);
 attachInterrupt(0, incpulso, RISING); //Configura o pino 2(Interrupção 0) interrupção
}
 
void loop ()  {
 contaPulso = 0;//Zera a variável
 sei(); //Habilita interrupção
 delay (15000);  //delay 60000(3600000)
 delay (15000);
 delay (15000);
 delay (15000);
 contador = contador + 1;
 cli(); //Desabilita interrupção

 vazao = contaPulso / 5.5; //Converte para L/min
 media = media + vazao; //Soma a vazão para o calculo da media

 MiliLitros = vazao / 60;
 Litros = Litros + MiliLitros;

 
 if((Litros > 0) || (contador == 60 )){
  Serial.print("          ");
  Serial.print(Litros);
  Serial.print(separador);
  Serial.print(residencia);
  Serial.println();
Litros =0;
contador = 0;
 }
}
 
void incpulso ()  {
 contaPulso++; //Incrementa a variável de pulsos
}
