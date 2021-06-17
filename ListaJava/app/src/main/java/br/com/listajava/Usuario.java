package br.com.listajava;

import android.widget.EditText;

import java.io.Serializable;

public class Usuario implements Serializable {
    public Usuario(EditText title_input, EditText date_input, EditText description_input) {

    }

    public String getTitle_input(){
        return title_input;
    }
    public String getDate_input(){
        return date_input;
    }
    public String getDescription_input(){
        return description_input;
    }

    public String setTitle_input(){
        return title_input;
    }
    public String setDate_input(){
        return date_input;
    }
    public String setDescription_input(){
        return description_input;
    }

    @Override
    public String toString() {
        return "Usuario{" +
                "title_input='" + title_input + '\'' +
                ", date_input='" + date_input + '\'' +
                ", description_input='" + description_input + '\'' +
                '}';
    }

    public Usuario(String title_input, String date_input, String description_input){
        this.title_input=title_input;
        this.date_input=date_input;
        this.description_input=description_input;
    }

    String title_input;
    String date_input;
    String description_input;
}
