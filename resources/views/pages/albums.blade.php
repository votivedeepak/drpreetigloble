 @include('layouts.header')
<main>

<style>

#about-u:before {
    background: none;
    position: absolute;
}

    :root{
      --gap: 12px;
      --bg: #0f172a;
      --card: #0b1220;
      --accent: #7c3aed;
      --text: #e6eef8;
    }
    html,body{height:100%;}
    body{
      margin:0;
      font-family: Inter, system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial;
      background: linear-gradient(180deg,var(--bg), #071029 140%);
      color:var(--text);
      -webkit-font-smoothing:antialiased;
      -moz-osx-font-smoothing: grayscale;
      padding:32px;
      box-sizing:border-box;
    }

    .wrap{
      max-width:1200px;
      margin:0 auto;
    }

    .pheader{display:flex;align-items:center;justify-content:space-between;margin-bottom:18px}
    .pheader h1{font-size:20px;margin:0}
    .pheader p{margin:0;color:#b7c3da;font-size:14px}

    /* Gallery grid */
    .gallery{
      display:grid;
      gap:var(--gap);
      grid-template-columns: repeat(4, 1fr);
    }

    .item{
      position:relative;
      overflow:hidden;
      border-radius:12px;
      background:linear-gradient(180deg, rgba(255,255,255,0.02), rgba(0,0,0,0.05));
      cursor:pointer;
      transition:transform .25s ease, box-shadow .25s ease;
    }
    .item:focus{outline:3px solid rgba(124,58,237,0.22)}
    .item:hover{transform:translateY(-6px);box-shadow:0 10px 30px rgba(2,6,23,0.6)}

    .item img{
      display:block;
      width:100%;
      height:100%;
      object-fit:cover;
      aspect-ratio: 4/3;
      vertical-align:middle;
      transition:transform .45s cubic-bezier(.2,.9,.3,1);
    }
    .item:hover img{transform:scale(1.06)}

    .caption{
      position:absolute;
      left:10px;right:10px;bottom:10px;
      padding:6px 10px;
      background:linear-gradient(90deg, rgba(2,6,23,0.55), rgba(2,6,23,0.28));
      border-radius:8px;
      font-size:13px;
      color:#eaf0ff;
      display:flex;justify-content:space-between;align-items:center;gap:8px;
      backdrop-filter: blur(6px);
    }

    .caption .tag{
      font-size:12px;padding:4px 8px;border-radius:999px;background:rgba(255,255,255,0.04);color:#dbe8ff
    }

    /* Responsive */
    @media (max-width:1100px){.gallery{grid-template-columns:repeat(3,1fr)}}
    @media (max-width:700px){.gallery{grid-template-columns:repeat(2,1fr)}}
    @media (max-width:420px){.gallery{grid-template-columns:repeat(1,1fr)}}

    /* Lightbox / modal */
    .lightbox{
      position:fixed;inset:0;display:none;align-items:center;justify-content:center;z-index:1200;
      background:linear-gradient(180deg, rgba(1,3,8,0.85), rgba(6,10,20,0.95));
      padding:20px;
    }
    .lightbox.open{display:flex}
    .lightbox-content{
      max-width:1100px; width:calc(100% - 64px); max-height:85vh; display:flex;flex-direction:column;align-items:center;gap:12px;
    }
    .lightbox-img{
      width:100%; height:calc(85vh - 84px); display:block;object-fit:contain;border-radius:10px;box-shadow:0 20px 50px rgba(2,6,23,0.8);
    }
    .controls{display:flex;gap:8px;align-items:center}
    .btn{
      appearance:none;border:0;background:rgba(255,255,255,0.04);color:var(--text);padding:8px 12px;border-radius:10px;cursor:pointer;font-weight:600
    }
    .btn:focus{outline:3px solid rgba(124,58,237,0.22)}

    .nav-arrow{
      position:absolute;top:50%;transform:translateY(-50%);z-index:1250;display:flex;align-items:center;justify-content:center;width:48px;height:48px;border-radius:10px;background:rgba(255,255,255,0.03);backdrop-filter:blur(4px);cursor:pointer
    }
    .nav-prev{left:18px}
    .nav-next{right:18px}

    .sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;border:0}

  
  </style> 

<section id="about-u" class="d-flex align-items-center justify-content-center" style="background-image: url('https://www.drpreetiglobaluniversity.com/public/frontend/assets/img/public-self-disclosure-pg.jpg');> 
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        
        </div>
      </div>

    
    </div>
  </section><!-- End about-u -->
<section  id="academic-inner"  class="academic-inner about-fblock">
  <div class="ac-box">
     <div class="container">


<div class="col-md-12">
  <div class="course-details-1x imgs">
    <!-- <h4 style="color: #000; margin: 10px 0;"></h4> -->

    <div class="row align-items-center mb-4">

    <p style="text-align: justify; font-family: Arial;">


  <div class="wrap">
    <div class="pheader">
      <div>
        <h1>Picture Gallery</h1>
        <p></p>
      </div>
      <div>
        <button class="btn" id="shuffleBtn" title="Shuffle images"></button>
      </div>
    </div>

    <main>
      <div class="gallery" id="gallery">
        <!-- Images (replace src with your paths) -->
        <!-- Using picsum.photos placeholders — replace when you add your own images -->
        <figure class="item" tabindex="0" data-index="0" data-caption="Cascading cliffs">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/1.jpg') }}" alt="Cascading cliffs" />
         <!-- <figcaption class="caption"><span></span></figcaption> -->
        </figure>

        <figure class="item" tabindex="0" data-index="1" data-caption="Golden meadow">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/2.jpg') }}" alt="Golden meadow" />
         
        </figure>

        <figure class="item" tabindex="0" data-index="2" data-caption="Misty city skyline">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/3.jpg') }}" alt="Misty city skyline" />
         
        </figure>

        <figure class="item" tabindex="0" data-index="3" data-caption="Forest trail">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/4.jpg') }}" alt="Forest trail" />
         
        </figure>

        <figure class="item" tabindex="0" data-index="4" data-caption="Desert dunes">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/5.jpeg') }}" alt="Desert dunes" />
         
        </figure>

        <figure class="item" tabindex="0" data-index="5" data-caption="Sunset pier">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/6.jpeg') }}" alt="Sunset pier" />
         
        </figure>

        <figure class="item" tabindex="0" data-index="6" data-caption="Snow-capped peaks">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/7.jpeg') }}" alt="Snow-capped peaks" />
         
        </figure>

        <figure class="item" tabindex="0" data-index="7" data-caption="Old stone bridge">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/8.jpeg') }}" alt="Old stone bridge" />
         
        </figure>

        <figure class="item" tabindex="0" data-index="8" data-caption="Night starscape">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/9.jpeg') }}" alt="Night starscape" />
         
        </figure>

        <figure class="item" tabindex="0" data-index="9" data-caption="Vineyard rows">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/10.jpeg') }}" alt="Vineyard rows" />
         
        </figure>

        <figure class="item" tabindex="0" data-index="10" data-caption="Quiet harbor">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/11.jpeg') }}" alt="Quiet harbor" />
         
        </figure>

        <figure class="item" tabindex="0" data-index="11" data-caption="Cobblestone lane">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/12.jpeg') }}" alt="Cobblestone lane" />
         
        </figure>


                <figure class="item" tabindex="0" data-index="0" data-caption="Cascading cliffs">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/13.jpeg') }}" alt="Cascading cliffs" />
         
        </figure>

        <figure class="item" tabindex="0" data-index="1" data-caption="Golden meadow">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/14.jpeg') }}" alt="Golden meadow" />
         
        </figure>

        <figure class="item" tabindex="0" data-index="2" data-caption="Misty city skyline">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/15.jpeg') }}" alt="Misty city skyline" />
         
        </figure>

        <figure class="item" tabindex="0" data-index="3" data-caption="Forest trail">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/16.jpeg') }}" alt="Forest trail" />
         
        </figure>

        <figure class="item" tabindex="0" data-index="4" data-caption="Desert dunes">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/17.jpeg') }}" alt="Desert dunes" />
         
        </figure>

        <figure class="item" tabindex="0" data-index="5" data-caption="Sunset pier">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/18.jpeg') }}" alt="Sunset pier" />
          
        </figure>

        <figure class="item" tabindex="0" data-index="6" data-caption="Snow-capped peaks">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/19.jpeg') }}" alt="Snow-capped peaks" />
          
        </figure>

        <figure class="item" tabindex="0" data-index="7" data-caption="Old stone bridge">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/20.jpeg') }}" alt="Old stone bridge" />
          
        </figure>

        <figure class="item" tabindex="0" data-index="8" data-caption="Night starscape">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/21.jpeg') }}" alt="Night starscape" />
          
        </figure>

        <figure class="item" tabindex="0" data-index="9" data-caption="Vineyard rows">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/22.jpeg') }}" alt="Vineyard rows" />
          
        </figure>

        <figure class="item" tabindex="0" data-index="10" data-caption="Quiet harbor">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/23.jpeg') }}" alt="Quiet harbor" />
          
        </figure>

        <figure class="item" tabindex="0" data-index="11" data-caption="Cobblestone lane">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/24.jpeg') }}" alt="Cobblestone lane" />
          
        </figure>

                <figure class="item" tabindex="0" data-index="0" data-caption="Cascading cliffs">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/25.jpeg') }}" alt="Cascading cliffs" />
          
        </figure>

        <figure class="item" tabindex="0" data-index="1" data-caption="Golden meadow">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/26.jpeg') }}" alt="Golden meadow" />
          
        </figure>

        <figure class="item" tabindex="0" data-index="2" data-caption="Misty city skyline">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/27.jpeg') }}" alt="Misty city skyline" />
          
        </figure>

        <figure class="item" tabindex="0" data-index="3" data-caption="Forest trail">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/28.jpeg') }}" alt="Forest trail" />
          
        </figure>

        <figure class="item" tabindex="0" data-index="4" data-caption="Desert dunes">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/29.jpeg') }}" alt="Desert dunes" />
          
        </figure>

        <figure class="item" tabindex="0" data-index="5" data-caption="Sunset pier">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/30.jpeg') }}" alt="Sunset pier" />
          
        </figure>

        <figure class="item" tabindex="0" data-index="6" data-caption="Snow-capped peaks">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/31.jpeg') }}" alt="Snow-capped peaks" />
          
        </figure>

        <figure class="item" tabindex="0" data-index="7" data-caption="Old stone bridge">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/32.jpeg') }}" alt="Old stone bridge" />
          
        </figure>

        <figure class="item" tabindex="0" data-index="8" data-caption="Night starscape">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/33.jpeg') }}" alt="Night starscape" />
          
        </figure>

        <figure class="item" tabindex="0" data-index="9" data-caption="Vineyard rows">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/34.jpeg') }}" alt="Vineyard rows" />
          
        </figure>

        <figure class="item" tabindex="0" data-index="10" data-caption="Quiet harbor">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/35.jpeg') }}" alt="Quiet harbor" />
          
        </figure>

        <figure class="item" tabindex="0" data-index="11" data-caption="Cobblestone lane">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/36.jpeg') }}" alt="Cobblestone lane" />
          
        </figure>

                <figure class="item" tabindex="0" data-index="0" data-caption="Cascading cliffs">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/37.jpeg') }}" alt="Cascading cliffs" />
          
        </figure>

        <figure class="item" tabindex="0" data-index="1" data-caption="Golden meadow">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/38.jpeg') }}" alt="Golden meadow" />
          
        </figure>

        <figure class="item" tabindex="0" data-index="2" data-caption="Misty city skyline">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/39.jpeg') }}" alt="Misty city skyline" />
          
        </figure>

        <figure class="item" tabindex="0" data-index="3" data-caption="Forest trail">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/40.jpeg') }}" alt="Forest trail" />
          
        </figure>

        <figure class="item" tabindex="0" data-index="4" data-caption="Desert dunes">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/41.jpeg') }}" alt="Desert dunes" />
          
        </figure>

        <figure class="item" tabindex="0" data-index="5" data-caption="Sunset pier">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/42.jpeg') }}" alt="Sunset pier" />
          
        </figure>

        <figure class="item" tabindex="0" data-index="6" data-caption="Snow-capped peaks">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/43.jpeg') }}" alt="Snow-capped peaks" />
          
        </figure>

        <figure class="item" tabindex="0" data-index="7" data-caption="Old stone bridge">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/44.jpeg') }}" alt="Old stone bridge" />
          
        </figure>

        <figure class="item" tabindex="0" data-index="8" data-caption="Night starscape">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/45.jpeg') }}" alt="Night starscape" />
          
        </figure>

        <figure class="item" tabindex="0" data-index="9" data-caption="Vineyard rows">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/46.jpeg') }}" alt="Vineyard rows" />
          
        </figure>

        <figure class="item" tabindex="0" data-index="10" data-caption="Quiet harbor">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/47.jpeg') }}" alt="Quiet harbor" />
          
        </figure>

        <figure class="item" tabindex="0" data-index="11" data-caption="Cobblestone lane">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/48.jpeg') }}" alt="Cobblestone lane" />
          
        </figure>

                <figure class="item" tabindex="0" data-index="0" data-caption="Cascading cliffs">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/49.jpeg') }}" alt="Cascading cliffs" />
          
        </figure>

        <figure class="item" tabindex="0" data-index="1" data-caption="Golden meadow">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/50.jpeg') }}" alt="Golden meadow" />
          
        </figure>

        <figure class="item" tabindex="0" data-index="2" data-caption="Misty city skyline">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/51.jpeg') }}" alt="Misty city skyline" />
          
        </figure>

        <figure class="item" tabindex="0" data-index="3" data-caption="Forest trail">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/52.jpeg') }}" alt="Forest trail" />
          
        </figure>

        <figure class="item" tabindex="0" data-index="4" data-caption="Desert dunes">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/53.jpeg') }}" alt="Desert dunes" />
          
        </figure>

        <figure class="item" tabindex="0" data-index="5" data-caption="Sunset pier">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/54.jpeg') }}" alt="Sunset pier" />
          
        </figure>

        <figure class="item" tabindex="0" data-index="6" data-caption="Snow-capped peaks">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/55.jpeg') }}" alt="Snow-capped peaks" />
          
        </figure>

        <figure class="item" tabindex="0" data-index="7" data-caption="Old stone bridge">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/56.jpg') }}" alt="Old stone bridge" />
          
        </figure>

        <figure class="item" tabindex="0" data-index="8" data-caption="Night starscape">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/57.jpeg') }}" alt="Night starscape" />
          
        </figure>

        <figure class="item" tabindex="0" data-index="9" data-caption="Vineyard rows">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/58.jpeg') }}" alt="Vineyard rows" />
          
        </figure>

        <figure class="item" tabindex="0" data-index="10" data-caption="Quiet harbor">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/59.jpeg') }}" alt="Quiet harbor" />
          
        </figure>

        <figure class="item" tabindex="0" data-index="11" data-caption="Cobblestone lane">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/60.jpeg') }}" alt="Cobblestone lane" />
          
        </figure>

                <figure class="item" tabindex="0" data-index="0" data-caption="Cascading cliffs">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/61.jpeg') }}" alt="Cascading cliffs" />
          
        </figure>

        <figure class="item" tabindex="0" data-index="1" data-caption="Golden meadow">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/62.jpeg') }}" alt="Golden meadow" />
          
        </figure>

        <figure class="item" tabindex="0" data-index="2" data-caption="Misty city skyline">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/63.jpeg') }}" alt="Misty city skyline" />
          
        </figure>

        <figure class="item" tabindex="0" data-index="3" data-caption="Forest trail">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/64.jpeg') }}" alt="Forest trail" />
          
        </figure>

        <figure class="item" tabindex="0" data-index="4" data-caption="Desert dunes">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/65.jpeg') }}" alt="Desert dunes" />
          
        </figure>

        <figure class="item" tabindex="0" data-index="5" data-caption="Sunset pier">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/66.jpeg') }}" alt="Sunset pier" />
          
        </figure>

        <figure class="item" tabindex="0" data-index="6" data-caption="Snow-capped peaks">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/67.jpeg') }}" alt="Snow-capped peaks" />
          
        </figure>

        <figure class="item" tabindex="0" data-index="7" data-caption="Old stone bridge">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/68.jpeg') }}" alt="Old stone bridge" />
          
        </figure>

        <figure class="item" tabindex="0" data-index="8" data-caption="Night starscape">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/69.jpeg') }}" alt="Night starscape" />
          
        </figure>

        <figure class="item" tabindex="0" data-index="9" data-caption="Vineyard rows">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/70.jpeg') }}" alt="Vineyard rows" />
          
        </figure>

        <figure class="item" tabindex="0" data-index="10" data-caption="Quiet harbor">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/71.jpeg') }}" alt="Quiet harbor" />
          
        </figure>

        <figure class="item" tabindex="0" data-index="11" data-caption="Cobblestone lane">
          <img loading="lazy" src="{{ asset('public/images/picturegallery/72.jpeg') }}" alt="Cobblestone lane" />
          
        </figure>


      </div>
    </main>

    
  </div>

  <!-- Lightbox markup -->
  <div class="lightbox" id="lightbox" role="dialog" aria-modal="true" aria-hidden="true">
    <button class="nav-arrow nav-prev" id="prevBtn" aria-label="Previous image">❮</button>
    <div class="lightbox-content" role="document">
      <img class="lightbox-img" id="lightboxImage" src="" alt="" />
      <div style="display:flex;justify-content:space-between;align-items:center;width:100%">
        <div id="lightboxCaption"></div>
        <div class="controls">
    
          <button class="btn" id="closeBtn">Close</button>
        </div>
      </div>
    </div>
    <button class="nav-arrow nav-next" id="nextBtn" aria-label="Next image">❯</button>
  </div>

  <script>
    (function(){
      const gallery = document.getElementById('gallery');
      const items = Array.from(gallery.querySelectorAll('.item'));
      const lightbox = document.getElementById('lightbox');
      const lbImg = document.getElementById('lightboxImage');
      const lbCaption = document.getElementById('lightboxCaption');
      const closeBtn = document.getElementById('closeBtn');
      const prevBtn = document.getElementById('prevBtn');
      const nextBtn = document.getElementById('nextBtn');
      const downloadBtn = document.getElementById('downloadBtn');
      const shuffleBtn = document.getElementById('shuffleBtn');

      let currentIndex = 0;

      function openLightbox(index){
        const item = items[index];
        if(!item) return;
        const img = item.querySelector('img');
        const caption = item.dataset.caption || img.alt || '';
        lbImg.src = img.src;
        lbImg.alt = img.alt || caption;
        lbCaption.textContent = caption;
        lightbox.classList.add('open');
        lightbox.setAttribute('aria-hidden','false');
        currentIndex = index;
        // set focus to close button for keyboard users
        closeBtn.focus();
      }

      function closeLightbox(){
        lightbox.classList.remove('open');
        lightbox.setAttribute('aria-hidden','true');
        lbImg.src = '';
      }

      function showPrev(){
        const idx = (currentIndex - 1 + items.length) % items.length;
        openLightbox(idx);
      }
      function showNext(){
        const idx = (currentIndex + 1) % items.length;
        openLightbox(idx);
      }

      // click / keyboard handlers for gallery items
      items.forEach((el,i)=>{
        el.addEventListener('click', ()=> openLightbox(i));
        el.addEventListener('keydown', (e)=>{
          if(e.key === 'Enter' || e.key === ' ') { e.preventDefault(); openLightbox(i); }
        });
      });

      closeBtn.addEventListener('click', closeLightbox);
      prevBtn.addEventListener('click', showPrev);
      nextBtn.addEventListener('click', showNext);

      // download current image
      downloadBtn.addEventListener('click', ()=>{
        const url = lbImg.src;
        if(!url) return;
        const a = document.createElement('a');
        a.href = url;
        a.download = url.split('/').pop() || 'image.jpg';
        document.body.appendChild(a);
        a.click();
        a.remove();
      });

      // keyboard navigation when lightbox open
      document.addEventListener('keydown', (e)=>{
        if(lightbox.classList.contains('open')){
          if(e.key === 'ArrowLeft') { e.preventDefault(); showPrev(); }
          else if(e.key === 'ArrowRight') { e.preventDefault(); showNext(); }
          else if(e.key === 'Escape') { e.preventDefault(); closeLightbox(); }
        }
      });

      // click outside image closes
      lightbox.addEventListener('click', (e)=>{
        if(e.target === lightbox) closeLightbox();
      });

      // simple shuffle function
      function shuffleArray(arr){
        for(let i = arr.length - 1; i > 0; i--){
          const j = Math.floor(Math.random()*(i+1));
          [arr[i], arr[j]] = [arr[j], arr[i]];
        }
      }

      shuffleBtn.addEventListener('click', ()=>{
        const parent = gallery;
        const figs = Array.from(parent.children);
        shuffleArray(figs);
        figs.forEach((f, i)=>{ f.dataset.index = i; parent.appendChild(f); });
        // refresh items array
        items.length = 0; // clear
        const newItems = Array.from(gallery.querySelectorAll('.item'));
        newItems.forEach(x=>items.push(x));
      });

      // ensure items array can be mutated by shuffle
      // items was created with Array.from; to allow push we defined let and later mutate

    })();
  </script>

     </p>
      
    </div>

  
  </div>
</div>


 
     </div>
  </div>
  
</section>

  <!---/.EMD OF FOOTER--->
</main>
@include('layouts.footer')


