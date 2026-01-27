export default {
  name: "Task",
  props: {
    status: {
      type: Boolean,
      required: true,
    },
    description: {
      type: String,
      required: true,
      default: "",
    },
  },
  template: `
    <div class="card">
      <div class="card-content">
        <div class="content">
          <label class="checkbox">
            <input
              type="checkbox"
              :checked="status"
              @change="$emit('updateTaskStatus', $event.target.checked)"
            />
            {{ description }}
          </label>
        </div>
      </div>
    </div>
  `,
  methods: {
  },
};
