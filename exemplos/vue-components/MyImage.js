export default {
  name: "MyImage",
  props: {
    link: {
      type: String,
      required: true,
    },
    description: {
      type: String,
      required: false,
      default: "",
    },
  },
  template: `
    <div class="card">
      <div class="card-image">
        <figure class="image is-128x128">
          <img
            :src="link"
            alt="description"
          />
        </figure>
      </div>
      <div class="card-content">
        <div class="content">
          <p>{{ description }}</p>
        </div>
      </div>
    </div>
  `,
  methods: {
  },
};
