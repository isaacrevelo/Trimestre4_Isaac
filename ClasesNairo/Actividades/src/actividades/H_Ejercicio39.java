/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package actividades;

/**
 *
 * @author isaac
 */
public class H_Ejercicio39 {
    public static void main(String[] args) throws InterruptedException {
 
        //Variables
        int horas = 0, minutos = 0, segundos = 0;
 
        while (true) {
 
            //Mostrar
            //Si es menor que 10, escribimos un cero delante
            if (horas < 10) {
                System.out.print("0");
            }
 
            System.out.print(horas + ":");
 
            if (minutos < 10) {
                System.out.print("0");
            }
 
            System.out.print(minutos + ":");
 
            if (segundos < 10) {
                System.out.print("0");
            }
 
            //salto de linea
            System.out.println(segundos);
 
            //Aumentar el tiempo
            segundos++;
 
            //Comprobar el tiempo
            if (segundos == 60) {
                //reinicio los segundos
                segundos = 0;
                //aumento los minutos
                minutos++;
                if (minutos == 60) {
                    //Reinicio los minutos
                    minutos = 0;
                    //Aumento las horas
                    horas++;
                    if (horas == 24) {
                        //Reinicio las horas
                        horas = 0;
                    }
                }
            }
 
            Thread.sleep(1000);
 
        }
 
    }
}
