// var form = document.getElementById('addForm');
var itemList = document.getElementById('items');
var filter = document.getElementById('filter');


// form.addEventListener('submit', addItem);
// itemList.addEventListener('click', removeItem);
 
filter.addEventListener('keyup', filterItems);

/* 
function addItem(e){
  e.preventDefault();
  var newItem = document.getElementById('item').value;
  var li = document.createElement('li');
  li.className = 'list-group-item';
  li.appendChild(document.createTextNode(newItem));
  var deleteBtn = document.createElement('button');
  deleteBtn.className = 'btn btn-danger btn-sm float-right delete';
  deleteBtn.appendChild(document.createTextNode('X'));
  li.appendChild(deleteBtn);
  itemList.appendChild(li);
} */

/* function removeItem(e){
  if(e.target.classList.contains('delete')){
    if(confirm('Are You Sure?')){
      var li = e.target.parentElement;
      itemList.removeChild(li);
    }
  }
} */

function deleteButton(delItems){

  // $.ajax({
  //   type: 'POST',
  //   url: './php/delete.php',
  //   data: {dele: delItems
  //   },
  //   success: function(response){
  //     if(response==1)
  //     document.getElementById("header-title").innerHTML="Hello";
  //   }    
  // });
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      console.log(this.responseText);
      if(this.responseText=='true')
        location.reload();
    }
  };
  xhttp.open("POST", "http://localhost/Notes/php/delete.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send('dele='+delItems);
}

function filterItems(e){
  var text = e.target.value.toLowerCase();
  var items = itemList.getElementsByTagName('li');
  Array.from(items).forEach(function(item){
    var itemName = item.firstChild.textContent;
    if(itemName.toLowerCase().indexOf(text) != -1){
      item.style.display = 'block';
    } else {
      item.style.display = 'none';
    }
  });
}