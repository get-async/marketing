<x-mail::message>
# Your login link for OrganizationOS

<x-mail::button :url="$link">
Login to OrganizationOS
</x-mail::button>

This link will only be valid for the next 5 minutes.

<x-mail::panel>
If you did not request this link, make sure to visit your account and change your password, just in case.
</x-mail::panel>

Thanks,<br>
{{ config('app.name') }}

</x-mail::message>
