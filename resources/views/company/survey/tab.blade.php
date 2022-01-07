<ul class="nav nav-tabs" id="myTab" role="tablist">
	<li class="nav-item">
		<a class="nav-link @if($activeTab == 'general') active @endif" href="{{ route('company.surveys.edit', $survey) }}">{{ __('عمومی') }}</a>
	</li>
	<li class="nav-item">
		<a class="nav-link @if($activeTab == 'questions') active @endif" href="{{ route('company.surveys.questions.index', $survey) }}">{{ __('سوالات') }}</a>
	</li>
    <li class="nav-item">
		<a class="nav-link @if($activeTab == 'design') active @endif" href="{{ route('company.surveys.design.edit', $survey) }}">{{ __('طرح') }}</a>
	</li>
	<li class="nav-item">
		<a class="nav-link @if($activeTab == 'share') active @endif" href="{{ route('company.surveys.share.show', $survey) }}">{{ __('اشتراک گذاری') }}</a>
	</li>
	<li class="nav-item">
		<a class="nav-link @if($activeTab == 'result') active @endif" href="{{ route('company.surveys.result.index', $survey) }}">{{ __('نتایج') }}</a>
	</li>
</ul>
