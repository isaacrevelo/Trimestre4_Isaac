/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package actividades;
import java.util.Scanner;
/**
 *
 * @author SENA
 */
public class G_Ejercicio21 {
    public static void main(String[] args) {
  
        for (int i=1;i<=100;i++){
            //Hacemos un casting para que nos devuelva un numero entero
            int raiz=(int)Math.sqrt(i);
            int contador=0;
  
            //Hacemos otro bucle para contar los divisibles
            for (int j=raiz;j>1;j--){
                if (i%j==0){
                    contador++;
                }
            }
  
            /*Segun el numero de divisibles, sabemos si es primo o no
             * Si es primo el contador sera 0
             */
  
            if (contador<1){
                System.out.println(i);
            }
  
        }
    }
}
