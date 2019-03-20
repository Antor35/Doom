<div class="app" id="drumkit">
	<div class="title">
		<p class="icon"><img src="/images/drum.jpg"></p>
		<p>Drum Kit</p>
		<p class="cross"><img src="/images/cross.png"></p>
	</div>
	<div class="content">

		  <div class="row keys">
		    <div data-key="65" class="col-md-2 key">
		      <kbd>A</kbd>
		      <span class="sound">clap</span>
		    </div>
		    <div data-key="83" class="col-md-2 key">
		      <kbd>S</kbd>
		      <span class="sound">hihat</span>
		    </div>
		    <div data-key="68" class="col-md-2 key">
		      <kbd>D</kbd>
		      <span class="sound">kick</span>
		    </div>
		    <div data-key="70" class="col-md-2 key">
		      <kbd>F</kbd>
		      <span class="sound">openhat</span>
		    </div>
		    <div data-key="71" class="col-md-2 key">
		      <kbd>G</kbd>
		      <span class="sound">boom</span>
		    </div>
		    <div data-key="72" class="col-md-2 key">
		      <kbd>H</kbd>
		      <span class="sound">ride</span>
		    </div>
		    <div data-key="74" class="col-md-2 key">
		      <kbd>J</kbd>
		      <span class="sound">snare</span>
		    </div>
		    <div data-key="75" class="col-md-2 key">
		      <kbd>K</kbd>
		      <span class="sound">tom</span>
		    </div>
		    <div data-key="76" class="col-md-2 key">
		      <kbd>L</kbd>
		      <span class="sound">tink</span>
		    </div>
		  </div>

		  <audio data-key="65" src="/sounds/clap.wav"></audio>
		  <audio data-key="83" src="/sounds/hihat.wav"></audio>
		  <audio data-key="68" src="/sounds/kick.wav"></audio>
		  <audio data-key="70" src="/sounds/openhat.wav"></audio>
		  <audio data-key="71" src="/sounds/boom.wav"></audio>
		  <audio data-key="72" src="/sounds/ride.wav"></audio>
		  <audio data-key="74" src="/sounds/snare.wav"></audio>
		  <audio data-key="75" src="/sounds/tom.wav"></audio>
		  <audio data-key="76" src="/sounds/tink.wav"></audio>

		<script>
		  function removeTransition(e) {
		    if (e.propertyName !== 'transform') return;
		    e.target.classList.remove('playing');
		  }

		  function playSound(e) {
		    const audio = document.querySelector(`audio[data-key="${e.keyCode}"]`);
		    const key = document.querySelector(`div[data-key="${e.keyCode}"]`);
		    if (!audio) return;

		    key.classList.add('playing');
		    audio.currentTime = 0;
		    audio.play();
		  }

		  const keys = Array.from(document.querySelectorAll('.key'));
		  keys.forEach(key => key.addEventListener('transitionend', removeTransition));
		  window.addEventListener('keydown', playSound);
		</script>

	</div>
	
</div>