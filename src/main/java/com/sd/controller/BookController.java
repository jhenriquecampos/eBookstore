package com.sd.controller;

import java.util.List;
import java.util.Optional;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;
import com.sd.repository.BookReposiroty;
import com.sd.model.Book;

@RestController
@RequestMapping("/")
public class BookController {
	
	@Autowired
	private BookReposiroty bkr;
	
	@GetMapping
	public List<Book> list_All(){
		return bkr.findAll();
	}
	
	@GetMapping("/title/{booktitle}")
	public List findByTitle(@PathVariable String booktitle) {
		return bkr.findByTitle(booktitle);
	}
	
	@PostMapping
	public ResponseEntity<Book> addBook (@RequestBody Book book){
		return ResponseEntity.ok(bkr.save(book));
	}
	
	@DeleteMapping
	public void removeBook (@RequestBody Integer id_book){
		if(bkr.findById(id_book)!=null) {
			bkr.deleteById(id_book);
		}
	}
}
