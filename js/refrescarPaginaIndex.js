/*VUELVE A INDEX CUANDO RETROCEDE LA PÁGINA*/
window.onload=function(){
      Objeto=document.getElementsByTagName("a");
      for(a=0;a<Objeto.length;a++){
        Objeto[a].onclick=function(){
          location.replace(this.href);
          return false;
    }
  }
}

