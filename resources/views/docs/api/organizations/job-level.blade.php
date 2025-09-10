<x-marketing-docs-layout :breadcrumbItems="[
  ['label' => 'Home', 'route' => route('marketing.index')],
  ['label' => 'Documentation', 'route' => route('marketing.docs.api.index')],
  ['label' => 'Job levels'],
]">
  <div class="py-16">
    <x-docs.h1 title="Job levels" />

    <x-docs.table-of-content :items="[
      [
        'id' => 'get-the-job-levels-of-the-given-job-discipline',
        'title' => 'Get the job levels of the given job discipline',
      ],
      [
        'id' => 'get-a-job-level',
        'title' => 'Get a specific job level',
      ],
      [
        'id' => 'create-a-job-level',
        'title' => 'Create a job level',
      ],
      [
        'id' => 'update-a-job-level',
        'title' => 'Update a job level',
      ],
      [
        'id' => 'delete-a-job-level',
        'title' => 'Delete a job level',
      ],
    ]" />

    <div class="mb-10 grid grid-cols-1 gap-6 border-b border-gray-200 pb-10 sm:grid-cols-2">
      <div>
        <p class="mb-2">This endpoint gets the job levels the given job discipline has.</p>
      </div>
      <div>
        <x-docs.code title="Endpoints">
          <div class="flex flex-col gap-y-2">
            <a href="#get-the-job-levels-of-the-given-job-discipline">
              <span class="text-blue-700">GET</span>
              /api/organizations/{id}/job-families/{job-family-id}/job-disciplines/{job-discipline-id}/job-levels
            </a>
          </div>
          <div class="flex flex-col gap-y-2">
            <a href="#get-a-job-level">
              <span class="text-blue-700">GET</span>
              /api/organizations/{id}/job-families/{job-family-id}/job-disciplines/{job-discipline-id}/job-levels/{job-level-id}
            </a>
          </div>
          <div class="flex flex-col gap-y-2">
            <a href="#create-a-job-level">
              <span class="text-green-700">POST</span>
              /api/organizations/{id}/job-families/{job-family-id}/job-disciplines/{job-discipline-id}/job-levels
            </a>
          </div>
          <div class="flex flex-col gap-y-2">
            <a href="#update-a-job-level">
              <span class="text-yellow-700">PUT</span>
              /api/organizations/{id}/job-families/{job-family-id}/job-disciplines/{job-discipline-id}/job-levels/{job-level-id}
            </a>
          </div>
          <div class="flex flex-col gap-y-2">
            <a href="#delete-a-job-level">
              <span class="text-red-700">DELETE</span>
              /api/organizations/{id}/job-families/{job-family-id}/job-disciplines/{job-discipline-id}/job-levels/{job-level-id}
            </a>
          </div>
        </x-docs.code>
      </div>
    </div>

    <!-- GET /api/organizations/{id}/job-families/{job-family-id}/job-disciplines -->
    <div class="mb-10 grid grid-cols-1 gap-6 border-b border-gray-200 pb-10 sm:grid-cols-2">
      <div>
        <x-docs.h2 id="get-the-job-levels-of-the-given-job-discipline" title="Get the job levels of the given job discipline" />
        <p class="mb-2">This endpoint gets the job levels the given job discipline has.</p>
        <p class="mb-10">
          This call is
          <x-link href="{{ route('marketing.docs.index') }}#pagination">paginated</x-link>
          , and the default page size is 10. This can not be changed.
        </p>

        <!-- url parameters -->
        <x-docs.url-parameters>
          <x-docs.attribute required name="id" type="integer" description="The ID of the organization to get the job levels from." />
          <x-docs.attribute required name="job-family-id" type="integer" description="The ID of the job family to get the job levels from." />
          <x-docs.attribute required name="job-discipline-id" type="integer" description="The ID of the job discipline to get the job levels from." />
        </x-docs.url-parameters>

        <!-- query parameters -->
        <x-docs.query-parameters>
          <p class="text-gray-500">No query parameters are available for this endpoint.</p>
        </x-docs.query-parameters>

        <!-- response attributes -->
        <x-docs.response-attributes>
          <x-docs.attribute name="type" type="string" description="The type of the resource." />
          <x-docs.attribute name="id" type="string" description="The ID of the job level." />
          <x-docs.attribute name="attributes" type="object" description="The attributes of the job level." />
          <x-docs.attribute name="attributes.organization_id" type="integer" description="The ID of the organization." />
          <x-docs.attribute name="attributes.job_discipline_id" type="integer" description="The ID of the job discipline." />
          <x-docs.attribute name="attributes.name" type="string" description="The name of the job level." />
          <x-docs.attribute name="attributes.slug" type="string" description="The slug of the job level." />
          <x-docs.attribute name="attributes.description" type="string" description="The description of the job level." />
          <x-docs.attribute name="attributes.created_at" type="integer" description="The date and time the object was created, in Unix timestamp format." />
          <x-docs.attribute name="attributes.updated_at" type="integer" description="The date and time the object was last updated, in Unix timestamp format." />
          <x-docs.attribute name="links" type="object" description="The links to access the job level." />
        </x-docs.response-attributes>
      </div>
      <div>
        <x-docs.code title="/api/organizations/{id}/job-families/{job-family-id}/job-disciplines/{job-discipline-id}/job-levels" verb="GET" verbClass="text-blue-700">
          @include('docs.api.partials.job-level-response')
        </x-docs.code>
      </div>
    </div>

    <!-- GET /api/organizations/{id}/job-families/{job-family-id}/job-disciplines/{job-discipline-id}/job-levels/{job-level-id} -->
    <div class="mb-10 grid grid-cols-1 gap-6 border-b border-gray-200 pb-10 sm:grid-cols-2">
      <div>
        <x-docs.h2 id="get-a-job-level" title="Get a specific job level" />
        <p class="mb-10">This endpoint gets a specific job level.</p>

        <!-- url parameters -->
        <x-docs.url-parameters>
          <x-docs.attribute required name="id" type="integer" description="The ID of the organization to get the job level from." />
          <x-docs.attribute required name="job-family-id" type="integer" description="The ID of the job family to get the job level from." />
          <x-docs.attribute required name="job-discipline-id" type="integer" description="The ID of the job discipline to get the job level from." />
          <x-docs.attribute required name="job-level-id" type="integer" description="The ID of the job level to get." />
        </x-docs.url-parameters>

        <!-- query parameters -->
        <x-docs.query-parameters>
          <p class="text-gray-500">No query parameters are available for this endpoint.</p>
        </x-docs.query-parameters>

        <!-- response attributes -->
        <x-docs.response-attributes>
          <x-docs.attribute name="type" type="string" description="The type of the resource." />
          <x-docs.attribute name="id" type="string" description="The ID of the job level." />
          <x-docs.attribute name="attributes" type="object" description="The attributes of the job level." />
          <x-docs.attribute name="attributes.organization_id" type="integer" description="The ID of the organization." />
          <x-docs.attribute name="attributes.job_discipline_id" type="integer" description="The ID of the job discipline." />
          <x-docs.attribute name="attributes.name" type="string" description="The name of the job level." />
          <x-docs.attribute name="attributes.slug" type="string" description="The slug of the job level." />
          <x-docs.attribute name="attributes.description" type="string" description="The description of the job level." />
          <x-docs.attribute name="attributes.created_at" type="integer" description="The date and time the object was created, in Unix timestamp format." />
          <x-docs.attribute name="attributes.updated_at" type="integer" description="The date and time the object was last updated, in Unix timestamp format." />
          <x-docs.attribute name="links" type="object" description="The links to access the job level." />
        </x-docs.response-attributes>
      </div>
      <div>
        <x-docs.code title="/api/organizations/{id}/job-families/{job-family-id}/job-disciplines/{job-discipline-id}/job-levels/{job-level-id}" verb="GET" verbClass="text-blue-700">
          @include('docs.api.partials.job-level-response')
        </x-docs.code>
      </div>
    </div>

    <!-- POST /api/organizations/{id}/job-families/{job-family-id}/job-disciplines/{job-discipline-id}/job-levels -->
    <div class="mb-10 grid grid-cols-1 gap-6 sm:grid-cols-2">
      <div>
        <x-docs.h2 id="create-a-job-level" title="Create a job level" />
        <p class="mb-10">This endpoint creates a new job level. It will return the job level in the response.</p>

        <!-- url parameters -->
        <x-docs.url-parameters>
          <x-docs.attribute required name="id" type="integer" description="The ID of the organization to create the job discipline for." />
          <x-docs.attribute required name="job-family-id" type="integer" description="The ID of the job family to create the job discipline for." />
          <x-docs.attribute required name="job-discipline-id" type="integer" description="The ID of the job discipline to create the job level for." />
        </x-docs.url-parameters>

        <!-- query parameters -->
        <x-docs.query-parameters>
          <x-docs.attribute required name="name" type="string" description="The name of the job level. Maximum 255 characters." />
          <x-docs.attribute required name="description" type="string" description="The description of the job level. Maximum 255 characters." />
        </x-docs.query-parameters>

        <!-- response attributes -->
        <x-docs.response-attributes>
          <x-docs.attribute name="type" type="string" description="The object type. Always 'job-level'." />
          <x-docs.attribute name="id" type="integer" description="The ID of the job level." />
          <x-docs.attribute name="attributes" type="object" description="The attributes of the job level." />
          <x-docs.attribute name="attributes.organization_id" type="integer" description="The ID of the organization." />
          <x-docs.attribute name="attributes.job_discipline_id" type="integer" description="The ID of the job discipline." />
          <x-docs.attribute name="attributes.name" type="string" description="The name of the job level." />
          <x-docs.attribute name="attributes.slug" type="string" description="The slug of the job level." />
          <x-docs.attribute name="attributes.description" type="string" description="The description of the job level." />
          <x-docs.attribute name="attributes.created_at" type="integer" description="The date and time the object was created, in Unix timestamp format." />
          <x-docs.attribute name="attributes.updated_at" type="integer" description="The date and time the object was last updated, in Unix timestamp format." />
          <x-docs.attribute name="links" type="object" description="The links of the job level." />
          <x-docs.attribute name="self" type="string" description="The URL of the job level." />
        </x-docs.response-attributes>
      </div>
      <div>
        <x-docs.code title="/api/organizations/{id}/job-families/{job-family-id}/job-disciplines/{job-discipline-id}/job-levels" verb="POST" verbClass="text-green-700">
          @include('docs.api.partials.job-level-response')
        </x-docs.code>
      </div>
    </div>

    <!-- PUT /api/organizations/{id}/job-families/{job-family-id}/job-disciplines/{job-discipline-id}/job-levels/{job-level-id} -->
    <div class="mb-10 grid grid-cols-1 gap-6 sm:grid-cols-2">
      <div>
        <x-docs.h2 id="update-a-job-level" title="Update a job level" />
        <p class="mb-10">This endpoint updates a specific job level. It will return the job level in the response.</p>

        <!-- url parameters -->
        <x-docs.url-parameters>
          <x-docs.attribute required name="id" type="integer" description="The ID of the organization to update the job discipline for." />
          <x-docs.attribute required name="job-family-id" type="integer" description="The ID of the job family to update the job discipline for." />
          <x-docs.attribute required name="job-discipline-id" type="integer" description="The ID of the job discipline to update." />
          <x-docs.attribute required name="job-level-id" type="integer" description="The ID of the job level to update." />
        </x-docs.url-parameters>

        <!-- query parameters -->
        <x-docs.query-parameters>
          <x-docs.attribute required name="name" type="string" description="The name of the job level. Maximum 255 characters." />
          <x-docs.attribute required name="description" type="string" description="The description of the job level. Maximum 255 characters." />
        </x-docs.query-parameters>

        <!-- response attributes -->
        <x-docs.response-attributes>
          <x-docs.attribute name="type" type="string" description="The object type. Always 'job-level'." />
          <x-docs.attribute name="id" type="integer" description="The ID of the job level." />
          <x-docs.attribute name="attributes" type="object" description="The attributes of the job level." />
          <x-docs.attribute name="attributes.organization_id" type="integer" description="The ID of the organization." />
          <x-docs.attribute name="attributes.job_discipline_id" type="integer" description="The ID of the job discipline." />
          <x-docs.attribute name="attributes.name" type="string" description="The name of the job level." />
          <x-docs.attribute name="attributes.slug" type="string" description="The slug of the job level." />
          <x-docs.attribute name="attributes.description" type="string" description="The description of the job level." />
          <x-docs.attribute name="attributes.created_at" type="integer" description="The date and time the object was created, in Unix timestamp format." />
          <x-docs.attribute name="attributes.updated_at" type="integer" description="The date and time the object was last updated, in Unix timestamp format." />
          <x-docs.attribute name="links" type="object" description="The links of the job level." />
          <x-docs.attribute name="self" type="string" description="The URL of the job level." />
        </x-docs.response-attributes>
      </div>
      <div>
        <x-docs.code title="/api/organizations/{id}/job-families/{job-family-id}/job-disciplines/{job-discipline-id}/job-levels/{job-level-id}" verb="PUT" verbClass="text-yellow-700">
          @include('docs.api.partials.job-level-response')
        </x-docs.code>
      </div>
    </div>

    <!-- DELETE /api/organizations/{id}/job-families/{job-family-id}/job-disciplines/{job-discipline-id}/job-levels/{job-level-id} -->
    <div class="mb-10 grid grid-cols-1 gap-6 sm:grid-cols-2">
      <div>
        <x-docs.h2 id="delete-a-job-level" title="Delete a job level" />
        <p class="mb-10">This endpoint deletes a specific job level.</p>

        <!-- url parameters -->
        <x-docs.url-parameters>
          <x-docs.attribute required name="id" type="integer" description="The ID of the organization to delete the job level from." />
          <x-docs.attribute required name="job-family-id" type="integer" description="The ID of the job family to delete the job level from." />
          <x-docs.attribute required name="job-discipline-id" type="integer" description="The ID of the job discipline to delete the job level from." />
          <x-docs.attribute required name="job-level-id" type="integer" description="The ID of the job level to delete." />
        </x-docs.url-parameters>

        <!-- query parameters -->
        <x-docs.query-parameters>
          <p class="text-gray-500">No query parameters are available for this endpoint.</p>
        </x-docs.query-parameters>

        <!-- response attributes -->
        <x-docs.response-attributes>
          <p class="text-gray-500">No response attributes are available for this endpoint.</p>
        </x-docs.response-attributes>
      </div>
      <div>
        <x-docs.code title="/api/organizations/{id}/job-families/{job-family-id}/job-disciplines/{job-discipline-id}/job-levels/{job-level-id}" verb="DELETE" verbClass="text-red-700">
          <div>No response body</div>
        </x-docs.code>
      </div>
    </div>
  </div>
</x-marketing-docs-layout>
