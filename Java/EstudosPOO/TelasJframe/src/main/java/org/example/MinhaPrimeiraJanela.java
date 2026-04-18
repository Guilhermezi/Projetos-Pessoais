package org.example;
import javax.swing.*;
import java.awt.*;

public class MinhaPrimeiraJanela extends JFrame{ //Classe MinhaPrimeiraJanela que herda caracteristicas
    JLabel rotulo1, rotulo2, rotulo3, rotulo4;
    public MinhaPrimeiraJanela(){
        super("Minha primeira Janela"); //Titulo do app
        Container tela = getContentPane(); // Obtém a camada de conteúdo da janela para permitir a adição e organização de componentes (botões, textos, etc.)
        setLayout(null); //

        setSize(250, 250); //Diz o tamanho inicial do app
//        setResizable(false);  // Bloqueia o redimencinamento do app
        setLocationRelativeTo(null); //Diz para o app aparecer no centro da tela

//        setExtendedState(ICONIFIED); Para a janela abrir minizada
//        setExtendedState(MAXIMIZED_BOTH); Para a janela abrir maximizada
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE); // para poder fechar o app no X

        //Agora vou Mudar a cor de fundo da tela:
        //Modos de colocar a cor:
//        tela.setBackground(Color.blue); normal
        tela.setBackground(Color.decode("#f9f9fb")); //Hexadecimal
//        tela.setBackground(new Color(255, 100, 0)); RGB

        //Colocando o Favicon:
        ImageIcon icone = new ImageIcon("/images/favicon.ico");
        setIconImage(icone.getImage());

        // Colocando Textos:
        rotulo1 = new JLabel("Nome");
        rotulo2 = new JLabel("Idade");
        rotulo3 = new JLabel("Telefone");
        rotulo4 = new JLabel("Celular");

        // Dizendo o lugar que vai ficar na tela, e tamanho
        rotulo1.setBounds(50, 20, 80, 20); // Os número corespondem a X, Y, Largura e Altura
        rotulo2.setBounds(50, 60, 80, 20);
        rotulo3.setBounds(50, 100, 80, 20);
        rotulo4.setBounds(50, 140, 80, 20);

        //Dizendo Cores das letras:
        rotulo1.setForeground(Color.RED);
        rotulo2.setForeground(Color.blue);
        rotulo3.setForeground(new Color(190, 152, 142));
        rotulo4.setForeground(Color.decode("#333"));

        //Fontes:
        rotulo1.setFont(new Font("Arial", Font.BOLD, 14));
        rotulo2.setFont(new Font("Comic Sans MS", Font.BOLD, 16));
        rotulo3.setFont(new Font("Courier New", Font.BOLD, 18));
        rotulo4.setFont(new Font("Time New Roman", Font.BOLD, 20));

        //Colocando na Tela:
        tela.add(rotulo1);
        tela.add(rotulo2);
        tela.add(rotulo3);
        tela.add(rotulo4);


        setVisible(true); // Torna o app visivel Sempre o último no contrutor
    }
}