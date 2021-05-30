package br.com.cardiaco_v2;

import java.io.Serializable;

public class Usuario implements Serializable {
    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public Usuario(String nome) {
        this.nome = nome;
    }

    String nome;


}
