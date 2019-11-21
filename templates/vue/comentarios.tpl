{literal}
<section id="template-vue-comentario">
    <h2>{{subtitle}}</h2>
    <ul>
        <li v-for="c in comentarios">
 
           <span>{{ c.valoracion }} - {{c.mensaje}} - {{c.email}}</span>
 
        </li> 
     </ul>
 
 </section>
 {/literal}
 