package com.sd.model;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Table;

@Entity
@Table(name="tb_livros")
public class Book {

	@Id
	private Integer id;
	
	@Column(name="title", nullable=false, unique=true)
	private String title;
	
	@Column(name="author", nullable=false)
	private String author;
	
	@Column(name="description", nullable=false)
	private String description;
	
		
	public Book() {
		super();
	}


	public String getTitle() {
		return title;
	}


	public void setTitle(String title) {
		this.title = title;
	}


	public String getAuthor() {
		return author;
	}


	public void setAuthor(String author) {
		this.author = author;
	}


	public String getDescription() {
		return description;
	}


	public void setDescription(String description) {
		this.description = description;
	}


	public Integer getId() {
		return id;
	}
			
}
