/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package entity;

import java.util.Collection;
import javax.xml.bind.annotation.XmlTransient;

/**
 *
 * @author hela1
 */

public class CategoryProduct {
    private Integer id;
    private String nameCategory;
    private Collection<Product> productCollection;

    public CategoryProduct() {
    }

    public CategoryProduct(Integer id) {
        this.id = id;
    }

    public CategoryProduct(Integer id, String nameCategory) {
        this.id = id;
        this.nameCategory = nameCategory;
    }

  
    public Integer getId() {
        return id;
    }

    public void setId(Integer id) {
        this.id = id;
    }

    public String getNameCategory() {
        return nameCategory;
    }

    public void setNameCategory(String nameCategory) {
        this.nameCategory = nameCategory;
    }

    @XmlTransient
    public Collection<Product> getProductCollection() {
        return productCollection;
    }

    public void setProductCollection(Collection<Product> productCollection) {
        this.productCollection = productCollection;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (id != null ? id.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof CategoryProduct)) {
            return false;
        }
        CategoryProduct other = (CategoryProduct) object;
        if ((this.id == null && other.id != null) || (this.id != null && !this.id.equals(other.id))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "entity.CategoryProduct[ id=" + id + " ]";
    }
    
}
