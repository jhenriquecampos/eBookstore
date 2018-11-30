package com.sd.repository;

import java.util.List;

import org.springframework.data.jpa.repository.JpaRepository;
import com.sd.model.Book;

public interface BookReposiroty extends JpaRepository<Book, Integer> {
	
	List<Book> findByTitle(String title);

}
