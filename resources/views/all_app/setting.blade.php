<div class="app" id="setting">
	<div class="title">
		<p class="icon"><img src="/images/setting.png"></p>
		<p>Application Launcher</p>
		<p class="cross"><img src="/images/cross.png"></p>
	</div>
	<div class="content">
		<div >
			<button class="btn btn-lg">
				<a class="dropdown-item" href="{{ route('logout') }}"
				   onclick="event.preventDefault();
				                 document.getElementById('logout-form').submit();">
				    {{ __('Logout') }}
				</a>
			</button>

			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			    @csrf
			</form>
		</div>
	</div>
</div>