<?php


class AntExtension_Engraveproduct_Block_Adminhtml_Attribute_Engraveprice extends Varien_Data_Form_Element_Text {
    public function getAfterElementHtml()
    {
        $html = parent::getAfterElementHtml();
        return $html
        ." <script>
        		document.getElementById('engraveprice').parentNode.parentNode.style.display = 'none';
        		
        		document.getElementById('engravestyle').addEventListener('change',function(e){
        		    if(e.target.value == 3) {
        		        document.querySelectorAll('input#engraveimage')[0].parentElement.parentElement.style.display = 'table-row';
        		        document.querySelectorAll('input#engraveframe')[0].parentElement.parentElement.style.display = 'table-row';
        		        document.getElementById('engraveprice').parentElement.parentElement.style.display = 'table-row';
        		    }
        		    if(e.target.value == 2) { 
        		        document.querySelectorAll('input#engraveimage')[0].parentElement.parentElement.style.display = 'none';
        		        document.querySelectorAll('input#engraveframe')[0].parentElement.parentElement.style.display = 'table-row';
        		        document.getElementById('engraveprice').parentElement.parentElement.style.display = 'none';
        		    }
        		    if(e.target.value == 1) { 
        		       document.querySelectorAll('input#engraveframe')[0].parentElement.parentElement.style.display = 'none';
        		       document.querySelectorAll('input#engraveimage')[0].parentElement.parentElement.style.display = 'table-row';
        		        document.getElementById('engraveprice').parentElement.parentElement.style.display = 'none';
        		    }
        		});
        		
        		document.addEventListener('DOMContentLoaded',function(){
        		    var type = document.getElementById('engravestyle').value ;
        		    if(type == 3) {
        		        document.querySelectorAll('input#engraveimage')[0].parentElement.parentElement.style.display = 'table-row';
        		        document.querySelectorAll('input#engraveframe')[0].parentElement.parentElement.style.display = 'table-row';
        		        document.getElementById('engraveprice').parentElement.parentElement.style.display = 'table-row';
        		    }
        		    if(type == 2) { 
        		        document.querySelectorAll('input#engraveimage')[0].parentElement.parentElement.style.display = 'none';
        		        document.querySelectorAll('input#engraveframe')[0].parentElement.parentElement.style.display = 'table-row';
        		        document.getElementById('engraveprice').parentElement.parentElement.style.display = 'none';
        		    }
        		    if(type == 1) { 
        		       document.querySelectorAll('input#engraveframe')[0].parentElement.parentElement.style.display = 'none';
        		       document.querySelectorAll('input#engraveimage')[0].parentElement.parentElement.style.display = 'table-row';
        		       document.getElementById('engraveprice').parentElement.parentElement.style.display = 'none';
        		    }
        		})
        </script><style>.fieldset-wide .form-list td.value input#engraveprice{width: 280px!important;}</style>";
    }
}