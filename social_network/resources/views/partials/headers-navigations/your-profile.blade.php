

<!-- Your Profile  -->

<div class="your-profile">
	<div class="ui-block-title ui-block-title-small">
		<h6 class="title">Your PROFILE</h6>
	</div>

	<div id="accordion" role="tablist" aria-multiselectable="true">
		<div class="card">
			<div class="card-header" role="tab" id="headingOne">
				<h6 class="mb-0">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						Profile Settings
						<svg class="olymp-dropdown-arrow-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-dropdown-arrow-icon"></use></svg>
					</a>
				</h6>
			</div>

			<div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
				<ul class="your-profile-menu">
					<li>
						<a href="{{route('get_profile_update_info', ['id' => Auth::id()])}}">Personal Information</a>
					</li>
					<li>
						<a href="{{route('get_hobbies_update_info', ['id'=>Auth::id()])}}">Hobbies and Interests</a>
					</li>
					<li>
						<a href="30-YourAccount-ChangePassword.html">Change Password</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="ui-block-title">
		<a href="33-YourAccount-Notifications.html" class="h6 title">Notifications</a>
		<a href="#" class="items-round-little bg-primary">8</a>
	</div>
	<div class="ui-block-title">
		<a href="34-YourAccount-ChatMessages.html" class="h6 title">Chat / Messages</a>
	</div>
	<div class="ui-block-title">
		<a href="{{route('friend_requests', ['id' => Auth::id()])}}" class="h6 title">Friend Requests</a>
		<a href="#" class="items-round-little bg-blue">{{count($friends)}}</a>
	</div>
</div>

<!-- ... end Your Profile  -->

