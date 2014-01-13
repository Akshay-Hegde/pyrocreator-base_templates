{{ if template:has_breadcrumbs }}
	{{ if theme:options:show_breadcrumbs == 'yes' }}
		<div class="">
			{{ template:breadcrumbs }}

				{{ if uri }}
					{{ url:anchor segments=uri title=name }}&nbsp;<span class="divider">::</span>&nbsp;
				{{ else }}
					<span class="current">{{ name }}</span>
				{{ endif }}

			{{ /template:breadcrumbs }}
		</div>
	{{ endif }}
{{ endif }}