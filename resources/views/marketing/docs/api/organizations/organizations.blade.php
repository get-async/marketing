<x-marketing-docs-layout :marketingPage="$marketingPage">
  <div class="py-16">
    <x-docs.h1 title="Organizations" />

    <x-docs.table-of-content :items="[
      [
        'id' => 'get-the-organizations-of-the-current-user',
        'title' => 'Get the organizations of the current user',
      ],
      [
        'id' => 'get-a-organization',
        'title' => 'Get a specific organization',
      ],
      [
        'id' => 'create-an-organization',
        'title' => 'Create an organization',
      ],
    ]" />

    <div class="mb-10 grid grid-cols-1 gap-6 border-b border-gray-200 pb-10 sm:grid-cols-2">
      <div>
        <p class="mb-2">This endpoint gets the organizations the current user belongs to.</p>
      </div>
      <div>
        <x-docs.code title="Endpoints">
          <div class="flex flex-col gap-y-2">
            <a href="#get-the-organizations-of-the-current-user">
              <span class="text-blue-700">GET</span>
              /api/organizations
            </a>
          </div>
          <div class="flex flex-col gap-y-2">
            <a href="#get-a-organization">
              <span class="text-blue-700">GET</span>
              /api/organizations/{id}
            </a>
          </div>
          <div class="flex flex-col gap-y-2">
            <a href="#create-an-organization">
              <span class="text-green-700">POST</span>
              /api/organizations
            </a>
          </div>
        </x-docs.code>
      </div>
    </div>

    <!-- GET /api/organizations -->
    <div class="mb-10 grid grid-cols-1 gap-6 border-b border-gray-200 pb-10 sm:grid-cols-2">
      <div>
        <x-docs.h2 id="get-the-organizations-of-the-current-user" title="Get the organizations of the current user" />
        <p class="mb-2">This endpoint gets the organizations the current user belongs to.</p>
        <p class="mb-10">
          This call is not
          <x-link href="{{ route('marketing.docs.index') }}#pagination">paginated</x-link>
          at the moment.
        </p>

        <!-- url parameters -->
        <x-docs.url-parameters>
          <p class="text-gray-500">This endpoint does not have any parameters.</p>
        </x-docs.url-parameters>

        <!-- query parameters -->
        <x-docs.query-parameters>
          <p class="text-gray-500">No query parameters are available for this endpoint.</p>
        </x-docs.query-parameters>

        <!-- response attributes -->
        <x-docs.response-attributes>
          <x-docs.attribute name="type" type="string" description="The type of the resource." />
          <x-docs.attribute name="id" type="string" description="The ID of the organization." />
          <x-docs.attribute name="attributes" type="object" description="The attributes of the organization." />
          <x-docs.attribute name="attributes.name" type="string" description="The name of the organization." />
          <x-docs.attribute name="attributes.slug" type="string" description="The slug of the organization." />
          <x-docs.attribute name="attributes.avatar" type="string" description="The avatar of the organization." />
          <x-docs.attribute name="attributes.created_at" type="integer" description="The date and time the object was created, in Unix timestamp format." />
          <x-docs.attribute name="attributes.updated_at" type="integer" description="The date and time the object was last updated, in Unix timestamp format." />
          <x-docs.attribute name="links" type="object" description="The links to access the organization." />
        </x-docs.response-attributes>
      </div>
      <div>
        <x-docs.code title="/api/organizations" verb="GET" verbClass="text-blue-700">
          @include('marketing.docs.api.partials.organization-response')
        </x-docs.code>
      </div>
    </div>

    <!-- GET /api/organizations/{id} -->
    <div class="mb-10 grid grid-cols-1 gap-6 border-b border-gray-200 pb-10 sm:grid-cols-2">
      <div>
        <x-docs.h2 id="get-a-organization" title="Get a specific organization" />
        <p class="mb-10">This endpoint gets a specific organization.</p>

        <!-- url parameters -->
        <x-docs.url-parameters>
          <x-docs.attribute required name="id" type="integer" description="The ID of the organization to get." />
        </x-docs.url-parameters>

        <!-- query parameters -->
        <x-docs.query-parameters>
          <p class="text-gray-500">No query parameters are available for this endpoint.</p>
        </x-docs.query-parameters>

        <!-- response attributes -->
        <x-docs.response-attributes>
          <x-docs.attribute name="type" type="string" description="The type of the resource." />
          <x-docs.attribute name="id" type="string" description="The ID of the organization." />
          <x-docs.attribute name="attributes" type="object" description="The attributes of the organization." />
          <x-docs.attribute name="attributes.name" type="string" description="The name of the organization." />
          <x-docs.attribute name="attributes.slug" type="string" description="The slug of the organization." />
          <x-docs.attribute name="attributes.avatar" type="string" description="The avatar of the organization." />
          <x-docs.attribute name="attributes.created_at" type="integer" description="The date and time the object was created, in Unix timestamp format." />
          <x-docs.attribute name="attributes.updated_at" type="integer" description="The date and time the object was last updated, in Unix timestamp format." />
          <x-docs.attribute name="links" type="object" description="The links to access the organization." />
        </x-docs.response-attributes>
      </div>
      <div>
        <x-docs.code title="/api/organizations/{id}" verb="GET" verbClass="text-blue-700">
          @include('marketing.docs.api.partials.organization-response')
        </x-docs.code>
      </div>
    </div>

    <!-- POST /api/organizations -->
    <div class="mb-10 grid grid-cols-1 gap-6 sm:grid-cols-2">
      <div>
        <x-docs.h2 id="create-an-organization" title="Create an organization" />
        <p class="mb-10">This endpoint creates a new organization. It will return the organization in the response. The avatar is automatically generated.</p>

        <!-- url parameters -->
        <x-docs.url-parameters>
          <p class="text-gray-500">This endpoint does not have any parameters.</p>
        </x-docs.url-parameters>

        <!-- query parameters -->
        <x-docs.query-parameters>
          <x-docs.attribute required name="name" type="string" description="The name of the organization. Maximum 255 characters." />
        </x-docs.query-parameters>

        <!-- response attributes -->
        <x-docs.response-attributes>
          <x-docs.attribute name="type" type="string" description="The object type. Always 'organization'." />
          <x-docs.attribute name="id" type="integer" description="The ID of the organization." />
          <x-docs.attribute name="attributes" type="object" description="The attributes of the organization." />
          <x-docs.attribute name="attributes.name" type="string" description="The name of the organization." />
          <x-docs.attribute name="attributes.slug" type="string" description="The slug of the organization." />
          <x-docs.attribute name="attributes.avatar" type="string" description="The avatar of the organization." />
          <x-docs.attribute name="attributes.created_at" type="integer" description="The date and time the object was created, in Unix timestamp format." />
          <x-docs.attribute name="attributes.updated_at" type="integer" description="The date and time the object was last updated, in Unix timestamp format." />
          <x-docs.attribute name="links" type="object" description="The links of the organization." />
          <x-docs.attribute name="self" type="string" description="The URL of the organization." />
        </x-docs.response-attributes>
      </div>
      <div>
        <x-docs.code title="/api/organizations" verb="POST" verbClass="text-green-700">
          @include('marketing.docs.api.partials.organization-response')
        </x-docs.code>
      </div>
    </div>
  </div>
</x-marketing-docs-layout>
