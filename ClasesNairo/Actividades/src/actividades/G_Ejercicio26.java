/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package actividades;
import java.util.Scanner;
/**
 *
 * @author isaac
 */
public class G_Ejercicio26 {
    public static void main(String[] args) {
         
        Scanner sn=new Scanner(System.in);
         
         
        System.out.println("Inserta un numero entero mayor que 1");
        int num;
         
        do{
           //Pedimos el primer número
           num=sn.nextInt();
            
           if(num<=1){
               System.out.println("Error. No has introducido un valor correcto."
                       + "Vuelve a intentarlo");
           }
             
        }while(!(num>=1)); //condición para salir
         
        int suma=0;
         
        //Realizamos la suma
        for(int contador=1;contador<=num;contador++){
            suma+=contador;
        } 
             
        System.out.println("La suma es: "+suma);
         
    }
}
