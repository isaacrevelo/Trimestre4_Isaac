/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package actividades;

/**
 *
 * @author SENA
 */
public class F_Ejercicio12_2 {
    public static void main(String[] args) {
 
        //Definimos el bucle, incluye el 100
        for (int num=1;num<=100;num++){
            //Comprobamos si es divisible entre 2 o 3
            if (num%2==0 || num%3==0){
                System.out.println(num);
            }
        }
    }
}
