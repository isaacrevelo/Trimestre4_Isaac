/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package octubre17.pkg1;

import java.util.Scanner;
/**
 *
 * @author SENA
 */
public class Octubre171 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        int numero1=0;
        int numero2=0;
        int suma=0;
        int resta=0;
        int multiplicacion=0;
        int division=0;
        
        
        Scanner teclado=new Scanner(System.in);
        System.out.println("Ingrese primer numero");
        numero1=teclado.nextInt();
        System.out.println("Usted digito el numero: "+numero1);
        
        System.out.println("Ingrese segundo numero");
        numero2=teclado.nextInt();
        System.out.println("Usted digito el numero: "+numero2);
        suma=numero1+numero2;
        System.out.println("La suma es de: "+suma);
        resta=numero1-numero2;
        System.out.println("La resta es de: "+resta);
        multiplicacion=numero1*numero2;
        System.out.println("La multiplicacion es de: "+multiplicacion);
        division=numero1/numero2;
        System.out.println("La division es de: "+division);
    }
    
}
