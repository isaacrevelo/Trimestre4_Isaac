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
public class F_Ejercicio18_2 {
    public static void main(String[] args) {
 
        String texto1=JOptionPane.showInputDialog("Introduce el primero numero");
        int num1=Integer.parseInt(texto1);
 
        String texto2=JOptionPane.showInputDialog("Introduce el segundo numero");
        int num2=Integer.parseInt(texto2);
 
        for (int i=0;i<10;i++){
            //Generamos un numero aleatorio
            int numAleatorio=(int)Math.floor(Math.random()*(num1-num2)+num2);
            System.out.println(numAleatorio);
        }
    }
}
