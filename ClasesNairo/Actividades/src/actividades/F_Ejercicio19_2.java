/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package actividades;
import javax.swing.JOptionPane;
/**
 *
 * @author SENA
 */
public class F_Ejercicio19_2 {
    public static void main(String[] args) {
 
        int numero=0;
        do{
            String texto=JOptionPane.showInputDialog("Introduce un numero");
            numero=Integer.parseInt(texto);
        }while(numero<0); int contador=0; for (int i=numero;i>0;i/=10){
            //Incrementamos el contador
            contador++;
        }
 
        //Controlamos en el caso de que haya una cifra o mas
        if (contador==1){
            System.out.println("El numero "+numero+ " tiene "+contador+" cifra");
        }else{
            System.out.println("El numero "+numero+ " tiene "+contador+" cifras");
        }
 
    }
}
